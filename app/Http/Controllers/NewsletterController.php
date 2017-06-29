<?php

namespace App\Http\Controllers;

use App\Events\NewsletterPublished;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::latest()->get();
        return view('newsletters.index', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsletters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content_html' => 'required',
        ]);

        $newsletter = new Newsletter();
        $newsletter->title = $request->input('title');
        $newsletter->slug = str_slug($request->input('title'), '-');
        $newsletter->content_html = $request->input('content_html');
        $newsletter->published_at = $request->input('published_at');

        auth()->user()->newsletters()->save($newsletter);

        return redirect()->route('newsletters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Newsletter $newsletter
     */
    public function show($slug, $id)
    {
        $newsletter = Newsletter::whereSlug($slug)->whereId($id)->firstOrFail();
        return view('newsletters.show', compact('newsletter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }

    public function send($slug, $id)
    {
        $newsletter = Newsletter::whereSlug($slug)->whereId($id)->firstOrFail();

        event(new NewsletterPublished($newsletter));

        return back();
    }
}
