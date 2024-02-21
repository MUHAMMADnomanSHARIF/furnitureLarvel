<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Blog;
use FFI\Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\View\ViewException;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogDatatable $blogDatatable)
    {
        return $blogDatatable->render('admin.blog.index', [$blogDatatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreBlogRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreBlogRequest  $request): RedirectResponse
    {
        try {
            $blog = Blog::create($request->validated());
            if (isset($request->image)) {
                $blog->addMedia(storage_path('tmp/uploads/' . $request->image))->toMediaCollection('blog.image');
            }
            if ($blog) {
                return redirect()->route('blog.index')->withSuccess('Blog successfully created');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return View
     */
    public function edit(Blog $blog): View
    {
        return view('admin.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        try {
            $blog->update($request->validated());

            if (isset($request['image']) == null) {
                $blog->clearMediaCollection('blog.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $request['image']))) {
                    return redirect()->route('blog.index')->withSuccess('Blog successfully Updated');
                }
                $blog->media()->delete();
                $blog->addMedia(storage_path('tmp/uploads/' . $request['image']))->toMediaCollection('blog.image');
            }
            if ($blog) {
                return redirect()->route('blog.index')->withSuccess('Blog successfully updated');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        try {
            $blog->media()->delete();
            $blog->delete();

            return redirect()->back()->withSuccess('Blog successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Blog not deleted');
        }
    }
}
