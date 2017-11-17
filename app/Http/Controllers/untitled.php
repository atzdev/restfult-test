AuthController_bkp.php

// Validation
        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);*/

        // Parse Data
        /*$name = $request->input('name');
        $email = $request->input('email');
        $password= $request->input('password');

        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        if ($user->save()) {
            $user->sigin = [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ];

            $response = [
                'msg' => 'User created',
                'user' => $user
            ];

            return response()->json($response,201);
        }
        return response()->json($response, 404);*/