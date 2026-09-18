<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuestResource;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class GuestController extends Controller
{
    public function index()
    {
        return GuestResource::collection(Guest::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|integer',
        ]);

        $guest = Guest::create([
            'wedding_id' => 1, // hardcoded for now, same as the web controller
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'phone' => $validated['phone'],
            'rsvp_token' => Str::random(32),
            'rsvp_status' => 'pending',
        ]);

        return new GuestResource($guest);
    }

    public function show(Guest $guest)
    {
        return new GuestResource($guest);
    }

    public function update(Request $request, Guest $guest)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'sometimes|integer',
            'allergies' => 'nullable|string',
            'rsvp_status' => 'sometimes|in:pending,confirmed,declined',
        ]);

        $guest->update($validated);

        return new GuestResource($guest);
    }

    public function destroy(Guest $guest)
    {
        Log::info('Deleting guest', [
            'id' => $guest->id,
            'name' => $guest->name,
        ]);

        $guest->delete();

        Log::info('Guest deleted successfully', [
            'id' => $guest->id,
        ]);

        return response()->noContent();
    }
}
