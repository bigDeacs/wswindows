<?php namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Brochure;
use App\Label;
use App\Offer;
use App\Colour;
use Mail;
use App\Http\Requests\ContactRequest;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	protected $data = [];

	public function __construct() {
		$this->data = [
			'brand'   => Brand::find(1)
	    ];
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$offers = Offer::where('status', '=', 1)->take(5)->get();
		$this->data['offers'] = $offers;
		$products = Product::where('status', '=', 1)->get();
		foreach($products as $product)
		{
			$rank = $product->rank()->first();
			if(count($rank))
			{
				array_set($product, 'rank', $rank->rank);
			}
			$image = $product->images()->first();
			array_set($product, 'image', $image['file']);
		}
		$this->data['products'] = $products;
		$brochures = Brochure::where('status', '=', 1)->get();
		$count = 0;
		foreach($brochures as $brochure)
		{
			$rank = $brochure->rank()->first();
			if(count($rank))
			{
				array_set($brochure, 'rank', $rank->rank);
				$count++;
			}
			if($count == 4) { break; }
		}
		$this->data['brochures'] = $brochures;
		$data = $this->data;
		return view('index', $data);
	}

	public function windows()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('type', function($q)
		{
		    $q->where('name', '=', 'Windows');

		})->get();
		foreach($this->data['products'] as $product)
		{
			$image = $product->images()->first();
			array_set($product, 'image', $image['file']);
		}
		$data = $this->data;
		return view('windows', $data);
	}

	public function window($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('type', function($q)
		{
		    $q->where('name', '=', 'Windows');

		})->take(4)->get();
		$data = $this->data;
		return view('window', $data);
	}

	public function doors()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('type', function($q)
		{
		    $q->where('name', '=', 'Doors');

		})->get();
		$data = $this->data;
		return view('doors', $data);
	}

	public function door($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('type', function($q)
		{
		    $q->where('name', '=', 'Doors');

		})->take(4)->get();
		foreach($this->data['products'] as $product)
		{
			$image = $product->images()->first();
			array_set($product, 'image', $image['file']);
		}
		$data = $this->data;
		return view('door', $data);
	}

	public function garageDoors()
	{
		$data = $this->data;
		return view('garage-doors', $data);
	}

	public function glassReplacement()
	{
		$data = $this->data;
		return view('glass-replacement', $data);
	}

	public function balustrades()
	{
		$data = $this->data;
		return view('balustrades', $data);
	}

	public function security()
	{
		$data = $this->data;
		return view('security', $data);
	}

	public function showerScreens()
	{
		$data = $this->data;
		return view('shower-screens', $data);
	}

	public function colours()
	{
		$this->data['colours'] = Colour::where('status', '=', 1)->get();
		$data = $this->data;
		return view('colours', $data);
	}

	public function brochures()
	{
		$this->data['brochures'] = Brochure::where('status', '=', 1)->get();
		$this->data['labels'] = Label::where('status', '=', 1)->where('type', '=', 'Brochure')->get();
		$data = $this->data;
		return view('brochures', $data);
	}

	public function faqs($id)
	{
		$data = $this->data;
		return view('faqs/' . $id, $data);
	}

	public function showroom()
	{
		$data = $this->data;
		return view('showroom', $data);
	}

	public function contact()
	{
		$data = $this->data;
		return view('contact', $data);
	}

	public function contactRequest(ContactRequest $request)
	{
		Mail::send('emails.contact',
	        ['name' => $request->get('name'), 'email' => $request->get('email'), 'phone' => $request->get('phone'), 'info' => $request->get('info')], function($message)
	   	 	{
	        	$message->from('info@wswindows.com.au');
	        	$message->to('info@wswindows.com.au', 'Sales')->cc('brentdeacon23@gmail.com', 'Admin')->subject('Wood Street Windows Contact Request');
	    	}
	    );
	    return redirect('thankyou');
	}

	public function thankyou()
	{
		$this->data['sent'] = true;
		$data = $this->data;
		return view('contact', $data);
	}

	public function privacy()
	{
		$data = $this->data;
		return view('privacy', $data);
	}

}
