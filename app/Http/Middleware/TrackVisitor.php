<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ipAddress = $request->ip(); // Declare and set the value of $ipAddress

            // Check if a record with the same IP address exists
            $existingVisitor = visitors::where('ip_address', $ipAddress)->first();

            if ($existingVisitor) {
                // Update the 'visited_at' timestamp
                $existingVisitor->update([
                    'visited_at' => now(),
                ]);
            } else {
                // If no existing record, create a new one
                visitors::create([
                    'ip_address' => $ipAddress,
                    'user_agent' => $request->header('User-Agent'),
                    'visited_at' => now(),
                ]);
            }

            return $next($request);
    }
}
