<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\KipUser;

class KipUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 必要なものだけSELECTする
        $users = KipUser::select("id", "uid", "name", "image_path")->get();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new KipUser;
        $user->uid = $request->uid;
        $user->name = $request->name;
        $user->token = Str::random();
        $user->password = $request->password;
        $user->image_path = $request->image;
        $user->save();

        // jsonに変換
        return json_encode(
            array(
                "id" => $user->id,
                "uid" => $user->uid,
                "token" => $user->token,
                "name" => $user->name,
                "image" => $user->image_path,
            )
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = KipUser::find($id);

        return json_encode(
            array(
                "id" => $user->id,
                "uid" => $user->uid,
                "name" => $user->name,
                "image" => $user->image_path,
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = KipUser::find($id);

        if($user==NULL)
        {
            return response("ステータスコード400", 400);
        }
        else
        {
            $user->delete();
            return response("ステータスコード200", 200);
        }

    }

    public function login(Request $request)
    {
        $uid = $request->uid;
        $password = $request->password;
        $user = KipUser::where("uid", $uid)->first();
        if ($user && $password == $user->password) {
            $token = Str::random();
            $user->token = $token;
            $user->save();
            return [
                "user" => [
                    "id" => $user->id,
                    "uid" => $user->uid,
                    "token" => $user->token,
                    "name" => $user->name,
                    "image" => $user->image_path,
                ]
            ];
        }else{
            return response(401);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->bearerToken();
        $user = KipUser::where("token", $token)->first();
        if ($token && $user) {
            $user->token = "";
            $user->save();
            return response(200);
        }else{
            return response(401);
        }
    }
}
