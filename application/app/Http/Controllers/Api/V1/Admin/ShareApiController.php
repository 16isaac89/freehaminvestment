<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShareRequest;
use App\Http\Requests\UpdateShareRequest;
use App\Http\Resources\Admin\ShareResource;
use App\Models\Share;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('share_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ShareResource(Share::with(['member'])->get());
    }

    public function store(StoreShareRequest $request)
    {
        $share = Share::create($request->all());

        return (new ShareResource($share))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Share $share)
    {
        abort_if(Gate::denies('share_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ShareResource($share->load(['member']));
    }

    public function update(UpdateShareRequest $request, Share $share)
    {
        $share->update($request->all());

        return (new ShareResource($share))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Share $share)
    {
        abort_if(Gate::denies('share_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $share->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
