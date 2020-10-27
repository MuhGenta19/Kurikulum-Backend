<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        if (!$films) {
            return $this->sendResponse('maaf...', 'anda kurang beruntung', NULL, '404');
        }
        return $this->sendResponse('selamat!', 'santuy', $films, '200');
    }
    public function store(Request $request, Film $films){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());

        }

        $films->title = $request->title;
        $films->description = $request->description;
        $films->author = $request->author;
        $films->publisher = $request->publisher;
        $films->year = $request->year;

        try {
            $films->save();
            $films = Film::all();
            return $this->sendResponse('berhasil', 'mantap slur..', $films, '200');
        } catch (\Throwable $th) {
            return $this->sendResponse('gagal bray', 'fix ada yg salah!', null, '404');
        }
    }

    public function show($id) {
        $films = Film::find($id);

        if (!$films) {
            return $this->sendResponse('JIAH!', 'ngape tuh?', NULL, '404');
        }
        return $this->sendResponse('sip!', 'nohh...', $films, '200');
    }

    public function destroy($id)
    {
        $films = Film::find($id);

        if ($films) {
            $films->delete();
            return $this->sendResponse('gaskeun', 'udeh tuh...', $films, '200');
        }
        return $this->sendResponse('eaa gabisa', 'ada yg salah kali cuy...', NULL, '404');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());

        }

        $film = Film::find($id);

        $film->title = $request->title;
        $film->description = $request->description;
        $film->author = $request->author;
        $film->publisher = $request->publisher;
        $film->year = $request->year;

        $film->save();

        $films = Film::all();
        return $this->sendResponse('berhasil', 'mantap slur..', $films, '200');
    }


}
