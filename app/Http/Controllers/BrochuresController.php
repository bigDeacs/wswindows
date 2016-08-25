<?php namespace App\Http\Controllers;

use App\Brochure;
use App\Label;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateBrochure;
use App\Http\Requests\UpdateBrochure;

class BrochuresController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$brochures = Brochure::all();
		return view('brochures.index', compact('brochures'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Brochure')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('brochures.create', compact('labels'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateBrochure $request)
	{
		$brochure = Brochure::create($request->all());
		if($request->hasFile('image'))
		{
			$file = $request->file('image');
			if($file->isValid())
			{
				$file->move(storage_path() . '/uploads/', ($filename = time() . '-' . $file->getClientOriginalName()));
				$brochure->thumb = ('/uploads/' . $filename);
			} else {
				return redirect()->back()->withInput();
			}
		}
		if($request->hasFile('file'))
		{
			$file = $request->file('file');
			if($file->isValid())
			{
				$file->move(storage_path() . '/uploads/', ($filename = time() . '-' . $file->getClientOriginalName()));
				$brochure->file = ('/uploads/' . $filename);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$brochure->save();
		return redirect('home/brochures');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('home/brochures');
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$brochure = Brochure::find($id);
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Brochure')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('brochures.edit', compact('brochure', 'labels'));
	}

	public function update(UpdateBrochure $request, $id)
	{
		$brochure = Brochure::find($id);
		$oldImage = $brochure->thumb;
		$oldUpload = $brochure->file;
		$brochure->update($request->all());
		if($request->hasFile('image'))
		{
			$file = $request->file('image');
			if($request->file('image')->isValid())
			{
				$file->move(storage_path() . '/uploads/', ($filename = time() . '-' . $file->getClientOriginalName()));
				$brochure->thumb = ('/uploads/' . $filename);
				File::delete(storage_path() . '/uploads/' . $oldImage);
			} else {
				return redirect()->back()->withInput();
			}
		}
		if($request->hasFile('file'))
		{
			$file = $request->file('file');
			if($file->isValid())
			{
				$file->move(storage_path() . '/uploads/', ($filename = time() . '-' . $file->getClientOriginalName()));
				$brochure->file = ('/uploads/' . $filename);
				File::delete(storage_path() . '/uploads/' . $oldUpload);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$brochure->save();
		return redirect('home/brochures');
	}

	public function activate($id)
	{
		$brochure = Brochure::find($id);
		$brochure->status = 1;
		$brochure->save();

		return redirect('home/brochures');
	}

	public function deactivate($id)
   	{
   		$brochure = Brochure::find($id);
   		$brochure->status = 0;
		$brochure->save();

      	return redirect('home/brochures');
   	}

}
