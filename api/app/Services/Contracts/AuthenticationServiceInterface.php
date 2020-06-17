<?php declare(strict_types=1);

namespace App\Services\Contracts;

use App\Http\Requests\LoginRequest;

interface AuthenticationServiceInterface
{
public function login(LoginRequest $request): array;

public function logout(): array;
}
