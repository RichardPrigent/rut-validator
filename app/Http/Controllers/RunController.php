<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RunService;
use App\Mappers\RunMapper;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Exception;

class RunController extends Controller
{
    protected $runService;
    protected $runMapper;

    public function __construct(RunService $runService, RunMapper $runMapper)
    {
        $this->runService = $runService;
        $this->runMapper = $runMapper;
    }

    public function validateRun(Request $request): JsonResponse
    {
        try {
            // Validar el request
            $request->validate(['run' => 'required|string']);

            // Validar y formatear el RUN
            $validatedRun = $this->runService->validateAndFormat($request->run);

            // Mapear los datos a un nuevo formato
            $mappedData = $this->runMapper->mapToNewFormat(['run' => $validatedRun]);

            return new JsonResponse($mappedData, JsonResponse::HTTP_OK);
        } catch (ValidationException $e) {
            // Manejar excepciones de validación
            return new JsonResponse(['error' => $e->errors()], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        } catch (Exception $e) {
            // Manejar excepciones generales
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
