<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\DropItemRequest;
use App\Http\Requests\GetItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Item;

class ItemController extends Controller
{
    protected $itemModel;

    public function __construct(Item $itemModel)
    {
        $this->itemModel = $itemModel;
    }

    public function getItems(GetItemRequest $request)
    {
        $items = $this
            ->itemModel
            ->newQuery()
            ->paginate($request->input('limit', 5));

        return response()->json($items);
    }

    public function createItem(CreateItemRequest $request)
    {
        try {
            $this->itemModel
                ->newQuery()
                ->create($request->only('item'));
        } catch (\Exception $error) {
            throw new ApiException($error->getMessage(), 400);
        }

        return response()->json([
            'message' => 'Item created successfully'
        ]);
    }

    public function updateItem(UpdateItemRequest $request)
    {
        try {
            $this->itemModel
                ->newQuery()
                ->findOrFail($request->input('id'))
                ->update($request->only('item', 'isCompleted'));
        } catch (\Exception $error) {
            throw new ApiException($error->getMessage(), 400);
        }

        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

    public function dropItem(DropItemRequest $request)
    {
        try {
            $this->itemModel
                ->newQuery()
                ->findOrFail($request->input('id'))
                ->delete();
        } catch (\Exception $error) {
            throw new ApiException($error->getMessage(), 400);
        }

        return response()->json([
            'message' => 'Item deleted successfully'
        ]);
    }

}
