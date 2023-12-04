<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Str;

class VisitorMiddleware
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
        $userAgent = $request->header('User-Agent');

        // Check if a record with the same user_agent exists
        $existingVisitor = Visitor::where('user_agent', $userAgent)->first();

        if ($existingVisitor) {
            // Update the 'visited_at' timestamp
            $existingVisitor->update([
                'visited_at' => now(),
            ]);
        } else {
            // If no existing record, create a new one
            $ipAddress = $request->ip();
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
