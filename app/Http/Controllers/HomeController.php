<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //index
    public function index()
    {
        // Fetch active banners from DB
        $data = DB::table('home_banners')
            ->where('active_flag', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        $services = DB::table('services')
            ->where('active_flag', '1')
            ->where('type', 'service')
            ->orderByRaw('order_no IS NULL, order_no ASC')
            ->orderByDesc("created_at")
            ->limit(8)
            ->get();
        $blogs = DB::table('blogs')
            ->where('active_flag', '1')
            ->orderByDesc("created_at")
            ->limit(3)
            ->get();
        $doctors = DB::table('doctors')
            ->where('active_flag', '1')
            ->orderByRaw('order_no IS NULL, order_no ASC')
            ->orderByDesc("created_at")
            ->get();
        // Pass $data to the view
        return $this->wrapView('web/index', [
            'data' => $data,
            "services" => $services,
            "blogs" => $blogs,
            "doctors" => $doctors
        ]);
    }

    //about-us
    public function aboutUs()
    {
        return $this->wrapView('web/about-us');
    }
    //contact-us
    public function contactUs(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => ['required'],
                'phone' => ['required'],
            ]);

            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            DB::table('contacts')->insert($data);
            return back()->with('message', 'We have received your message. Thank you for contacting EM Building Contractors!');
        }
        return $this->wrapView('web/contact-us');
    }
    //bookappointments
    public function bookAppointment(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'service' => ['required'],
                'booking_date' => ['required'],
            ]);

            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('phone'),
                'address' => $request->input('address'),
                'service' => $request->input('service'),
                'booking_date' => $request->input('booking_date'),
                'message' => $request->input('message'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            DB::table('book_appointments')
                ->insert($data);
            return back()->with('message', 'Your booking has been confirmed! We will contact you shortly.');
        }
        $services = DB::table('services')
            ->where('active_flag', 1)
            ->where('type', 'service')
            ->orderByRaw('order_no IS NULL, order_no ASC')
            ->orderByDesc('created_at')
            ->get();
        return $this->wrapView('web/book-appointment', ['services' => $services]);
    }
    //gallery
    public function gallery()
    {
        $data = DB::table('gallery')
        ->where('active_flag', '1')
        ->orderByDesc("created_at")
        ->get();
        return $this->wrapView('web/gallery', [
            "data" => $data
        ]);
    }
    //projects
    public function projects()
    {
        $categories = DB::table('project_categories')
            ->where('active_flag', 1)
            ->orderBy('order_no')
            ->orderByDesc('created_at')
            ->get();

        foreach ($categories as $cat) {
            $cat->projects = DB::table('projects')
                ->where('category_id', $cat->id)
                ->where('active_flag', 1)
                ->orderBy('order_no')
                ->orderByDesc('created_at')
                ->get();
        }

        return $this->wrapView('web/testimonials', ['categories' => $categories]);
    }
    //having subpages
    public function blogs()
    {
        $data = DB::table('blogs')
            ->where('active_flag', '1')
            ->orderByDesc("created_at")
            ->get();
        return $this->wrapView('web/blogs/list', [
            'data' => $data
        ]);
    }
    public function blogDetails($url)
    {
        $data = DB::table('blogs')
            ->where('slug', $url)
            ->first();
        if (empty($data)) {
            return back();
        }
        return $this->wrapView('web/blogs/details', [
            'data' => $data
        ]);
    }
    public function services()
    {
        $data = DB::table('services')
            ->where('active_flag', '1')
            ->where('type', 'service')
            ->orderByRaw('order_no IS NULL, order_no ASC')
            ->orderByDesc("created_at")
            ->get();
        return $this->wrapView('web/services/list', [
            'data' => $data
        ]);
    }
    public function servicesDetails($url)
    {
        $data = DB::table('services')
            ->where('slug', $url)
            ->first();
        if (empty($data)) {
            return back();
        }
        $allServices = DB::table('services')
            ->where('active_flag', '1')
            ->where('type', 'service')
            ->orderByRaw('order_no IS NULL, order_no ASC')
            ->orderByDesc("created_at")
            ->get();
        return $this->wrapView('web/services/details', [
            'data' => $data,
            'allServices' => $allServices
        ]);
    }
    public function hospitals()
    {
        return $this->wrapView('web/hospitals/list');
    }
    public function hospitalDetails()
    {
        return $this->wrapView('web/hospitals/details');
    }
    public function departments()
    {
        return $this->wrapView('web/departments/list');
    }
    public function departmentDetails()
    {
        return $this->wrapView('web/departments/details');
    }
    //faqs
    public function faqs()
    {
        $data = DB::table('faqs')
            ->where('active_flag', 1)
            ->orderByDesc('created_at')
            ->get();
        return $this->wrapView('web/faqs/list', ['faqs' => $data]);
    }
    private function wrapView($path, $data = null)
    {
        if ($data == null) {
            $data = [];
        }
        $metaData = [];

        $currentUri = request()->path();
        $seoData = DB::table('seo')
            ->where(function (Builder $builder) use ($currentUri) {
                if (empty($currentUri) || $currentUri == '/') {
                    $builder->where('url', '')
                        ->orWhereNull('url');
                } else {
                    $builder->where('url', $currentUri);
                }
            })
            ->first();
        if (empty($currentUri) || $currentUri == '/') {
        } else {
            $seoData1 = DB::table('seo')
                ->where('url', '')
                ->orWhereNull('url')
                ->first();
            if (empty($seoData)) {
                $seoData = $seoData1;
            } else {

                if (empty($seoData->title)) {
                    $seoData->title = $seoData1->title;
                }
                if (empty($seoData->description)) {
                    $seoData->description = $seoData1->description;
                }
                if (empty($seoData->keywords)) {
                    $seoData->keywords = $seoData1->keywords;
                }
                if (empty($seoData->meta)) {
                    $seoData->meta = $seoData1->meta;
                }
                if (empty($seoData->schema)) {
                    $seoData->schema = $seoData1->schema;
                }
                if (empty($seoData->gtag_head)) {
                    $seoData->gtag_head = $seoData1->gtag_head;
                }
                if (empty($seoData->gtag_body)) {
                    $seoData->gtag_body = $seoData1->gtag_body;
                }
            }
        }
        $metaData['seoData'] = $seoData;
        $data['metaData'] = $metaData;
        return view($path, $data);
    }
}
