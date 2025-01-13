<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    private $apiBaseUrl = 'http://localhost:3000'; // json-serverのURL

    public function index()
    {
        // json-serverからデータを取得
        $response = Http::get("{$this->apiBaseUrl}/items");
        $items = $response->json();

        return view('items.index', compact('items'));
    }

    public function store(Request $request)
    {
        // 新しいデータをjson-serverに送信
        Http::post("{$this->apiBaseUrl}/items", $request->all());

        return redirect()->route('items.index')->with('success', 'Item created successfully!');
    }

    public function update(Request $request, $id)
    {
        // データを更新
        Http::put("{$this->apiBaseUrl}/items/{$id}", $request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }

    public function destroy($id)
    {
        // データを削除
        Http::delete("{$this->apiBaseUrl}/items/{$id}");

        return redirect()->route('items.index')->with('success', 'Item deleted successfully!');
    }
}
