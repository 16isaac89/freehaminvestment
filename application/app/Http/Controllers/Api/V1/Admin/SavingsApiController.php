<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSavingRequest;
use App\Http\Requests\UpdateSavingRequest;
use App\Http\Resources\Admin\SavingResource;
use App\Models\Saving;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SavingsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('saving_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SavingResource(Saving::with(['member'])->get());
    }

    public function store(StoreSavingRequest $request)
    {
        $saving = Saving::create($request->all());

        return (new SavingResource($saving))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Saving $saving)
    {
        abort_if(Gate::denies('saving_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SavingResource($saving->load(['member']));
    }

    public function update(UpdateSavingRequest $request, Saving $saving)
    {
        $saving->update($request->all());

        return (new SavingResource($saving))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Saving $saving)
    {
        abort_if(Gate::denies('saving_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $saving->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
