<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class PostController extends Controller
{
    
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts')->collect();
        //  or
        $response = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        // or
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // return view('list',['response'=>$response]);
        $jsonData = $response->json();
          
        dd($jsonData);
    }

     public function getPostById($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        $jsonData = $response->json();
        dd($jsonData);
       }

       public function store()
       {
           $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
                       'title' => 'Tamilarasan',
                       'body' => 'Full',
                   ]);
     
           $jsonData = $response->json();
         
           dd($jsonData);
       }
    public function update($id)
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id, [
                    'title' => 'Tamilarasan',
                    'body' => 'Software Developer',
                ]);
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }


    public function delete($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        $jsonData = $response->json();    
        dd($jsonData);
    }
}
