<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComunaRequest;
use App\Http\Requests\UpdateComunaRequest;
use App\Repositories\ComunaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ComunaController extends AppBaseController
{
    /** @var  ComunaRepository */
    private $comunaRepository;

    public function __construct(ComunaRepository $comunaRepo)
    {
        $this->comunaRepository = $comunaRepo;
    }

    /**
     * Display a listing of the Comuna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $comunas = $this->comunaRepository->all();

        return view('comunas.index')
            ->with('comunas', $comunas);
    }

    /**
     * Show the form for creating a new Comuna.
     *
     * @return Response
     */
    public function create()
    {
        return view('comunas.create');
    }

    /**
     * Store a newly created Comuna in storage.
     *
     * @param CreateComunaRequest $request
     *
     * @return Response
     */
    public function store(CreateComunaRequest $request)
    {
        $input = $request->all();

        $comuna = $this->comunaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/comunas.singular')]));

        return redirect(route('comunas.index'));
    }

    /**
     * Display the specified Comuna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            Flash::error(__('messages.not_found', ['model' => __('models/comunas.singular')]));

            return redirect(route('comunas.index'));
        }

        return view('comunas.show')->with('comuna', $comuna);
    }

    /**
     * Show the form for editing the specified Comuna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            Flash::error(__('messages.not_found', ['model' => __('models/comunas.singular')]));

            return redirect(route('comunas.index'));
        }

        return view('comunas.edit')->with('comuna', $comuna);
    }

    /**
     * Update the specified Comuna in storage.
     *
     * @param int $id
     * @param UpdateComunaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComunaRequest $request)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            Flash::error(__('messages.not_found', ['model' => __('models/comunas.singular')]));

            return redirect(route('comunas.index'));
        }

        $comuna = $this->comunaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/comunas.singular')]));

        return redirect(route('comunas.index'));
    }

    /**
     * Remove the specified Comuna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comuna = $this->comunaRepository->find($id);

        if (empty($comuna)) {
            Flash::error(__('messages.not_found', ['model' => __('models/comunas.singular')]));

            return redirect(route('comunas.index'));
        }

        $this->comunaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/comunas.singular')]));

        return redirect(route('comunas.index'));
    }
}
