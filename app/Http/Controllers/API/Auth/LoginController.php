<?php
    
    namespace App\Http\Controllers\API\Auth;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\Hash;
    use App\Models\User;

    class LoginController extends Controller
    {


        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            $user = User::where('email', $request->email)->first();
            
            // Check if user exists and password matches
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'The provided credentials are incorrect.'
                ], 401);
            }

            $token = $user->createToken('api-token', [], now()->addDays(7))->plainTextToken;

            return response()->json([
                'user' => $user,
                'token' => $token,
            ], 200);
        }


   
  

    }
