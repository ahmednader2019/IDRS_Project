<?php

namespace App\Http\Controllers;

use App\Http\Resources\carResource;
use App\Http\Resources\driverResource;
use App\Http\Resources\healthResource;
use App\Http\Resources\locationResource;
use App\Http\Resources\photoResource;
use App\Models\Api;
use App\Models\Car;
use App\Models\DriverInf;
use App\Models\Health;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    use ApiResponseTrait ;



              // Update Status From The System
    public function update_status(Request $request)
    {
        // Extract the new value from the request payload
        $newValue = $request->input('status');

        // Update the status variable's value
        $driver = DriverInf::find(26);
        $driver->status = $newValue ;
        $driver->save();
        return response()->json(['message' => 'Status of the Driver updated successfully']);
    }
       /// Show data of one user by ID
    public function showbyid($id)
    {

        $driver =DriverInf::find($id);
        $car = Car::find($id);
        $health = Health::find($id);
        // $attach = Photo::find($id);


        if($driver){
            return $this->apiResponse(['driverDetails'=>new driverResource($driver) , 'carDetails' => new carResource($car) , 'healthDetails'=>new healthResource($health)] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );

    }

    // show driver details by id

    public function showDriverbyid($id)
    {
        $driver =DriverInf::find($id);
        if($driver){
            return $this->apiResponse([new driverResource($driver) ] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );
    }

    // show car details by id
    public function showCarbyid($id)
    {
        $car = Car::find($id);

        if($car){
            return $this->apiResponse([new carResource($car) ] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );

    }

    public function showHealthbyid($id)
    {
        $health = Health::find($id);

        if($health){
            return $this->apiResponse([new healthResource($health) ] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );

    }

     // show att
    public function ShowAttachbyid($id)
    {
        $attachments = Photo::find($id);

        if($attachments){
            return $this->apiResponse([new photoResource($attachments) ] , 'Data Retrieved Successfully' , 200 );
        }
        return $this->apiResponse(null , 'The user is not Found ' , 404 );

    }

    //

           //  Show data of the user by its email
           public function showbyemail($email)
           {
               $driver = User::where('email', $email)->first();

               if($driver){
                   return $this->apiResponse([new driverResource($driver) ] , 'Data Retrieved Successfully' , 200 );
               }
               return $this->apiResponse(null , 'The user is not Found ' , 404 );

           }

           public function showCarStatus($email)
           {
               $driver = DriverInf::where('email', $email)->first();
               if($driver){
                   return $this->apiResponse([new driverResource($driver) ] , 'Data Retrieved Successfully' , 200 );
               }
               return $this->apiResponse(null , 'The user is not Found ' , 404 );
           }

        // store driver inf  => API
    public function store_driver(Request $request)
    {
           $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'national_id' => 'required',
            'emergency_number' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null , $validator->errors(), 400 );

        }


        $driver= DriverInf::create($request->all());

        if($driver){
            return $this->apiResponse(new driverResource($driver) , 'Driver Inf Inserted Successfully ' , 201 );
        }
        return $this->apiResponse(null , 'The Driver information did not saved ! ' , 400 );
    }



     //  store car inf  => API
public function store_car(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'car_number' => 'required',
        'car_model' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );

    }


    $car= Car::create($request->all());

    if($car){
        return $this->apiResponse(new carResource($car) , 'Car Inf  Inserted Successfully ' , 201 );
    }
    return $this->apiResponse(null , 'The Car information did not saved ! ' , 400 );

}



    // store health inf => API
public function store_health(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'pressure' => 'required',
        'diabetes' => 'required',
        'blood' => 'required',
        'diseases' => 'required',
        'surgeries' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $health= Health::create($request->all());

    if($health){
        return $this->apiResponse(new healthResource($health) , 'health Inf Inserted Successfully ' , 201 );
    }
    return $this->apiResponse(null , 'The health information did not saved ! ' , 400 );
}


// public function store_data(Request $request)
// {
//     $validator = Validator::make($request->all(),[
//     //  "driverDetails" =>[
//     //         'name' => 'required',
//     //         'email' => 'required',
//     //         'gender' => 'required',
//     //         'phone_number' => 'required',
//     //         'city' => 'required',
//     //         'address' => 'required',
//     //         'date_of_birth' => 'required',
//     //         'nationality' => 'required',
//     //         'national_id' => 'required',
//     //         'emergency_number' => 'required',
//     //         ],

//     //         "carDetails" =>[
//     //             'driver_id' => 'required',
//     //             'car_number' => 'required',
//     //             'car_model' => 'required',
//     //             ],


//     //         "healthDetails" =>[
//     //             'driver_id' => 'required',
//     //             'pressure' => 'required',
//     //             'diabetes' => 'required',
//     //             'blood' => 'required',
//     //             'diseases' => 'required',
//     //             'surgeries' => 'required',
//     //             ],

//     ]);


//     if ($validator->fails()) {
//         return $this->apiResponse(null , $validator->errors(), 400 );
//     }
//     return $this->apiResponse(null , 'Data Saved Successfully !  ' , 200  );
// }
//  store attachements

public function store_attachments(Request $request)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'personal_photo' => 'required',
        'driver_licence' => 'required',
        'car_licence' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $photo = new Photo();
    $photo->driver_id = $request->driver_id;
       // personal photos
     if ($request->hasFile('personal_photo')) {

         $destination_path = 'public/images/personal';
         $personal = $request->file('personal_photo');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('personal_photo')->storeAs($destination_path,$image_name);

         $photo->personal_photo  = $image_name;
     }

       // Driver Licence
     if ($request->hasFile('driver_licence')) {

         $destination_path = 'public/images/driverLicences';
         $personal = $request->file('driver_licence');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('driver_licence')->storeAs($destination_path,$image_name);

         $photo->driver_licence  = $image_name;

     }

         /// Car License
     if ($request->hasFile('car_licence')) {

         $destination_path = 'public/images/carsLicences';
         $personal = $request->file('car_licence');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('car_licence')->storeAs($destination_path,$image_name);

         $photo->car_licence  = $image_name;
         // $filename = $request->file('filename1')->store('public');
         // $photo->filename1 = basename($filename);
     }
     $photo->save();
     return response()->json(['message' => 'Photos uploaded successfully']);
}

    // update driver inf -> API
 public function update_driver(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'phone_number' => 'required',
        'city' => 'required',
        'address' => 'required',
        'date_of_birth' => 'required',
        'nationality' => 'required',
        'national_id' => 'required',
        'emergency_number' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $driver = DriverInf::find($id);

    if(!$driver)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }
    $driver->update($request->all());

        if($driver){
            return $this->apiResponse(new driverResource($driver) , 'Driver Inf Updated Successfully ' , 201 );
        }

 }


  // update driver inf -> API
  public function update_Status_location(Request $request , $email )
  {
     $validator = Validator::make($request->all(), [
         'status' => 'required',
         'latitude' => 'required',
         'longitude' => 'required',
     ]);

     if ($validator->fails()) {
         return $this->apiResponse(null , $validator->errors(), 400 );
     }
     $driver = DriverInf::where('email', $email)->first();
     if(!$driver)
     {
         return $this->apiResponse(null , ' The User Not found ! ' , 400 );
     }
     $driver->update($request->all());

         if($driver){
             return $this->apiResponse(new locationResource($driver) , 'Driver location Updated Successfully ' , 201 );
         }
  }

        // update Location every 2 minutes
  public function update_location(Request $request , $email )
  {
     $validator = Validator::make($request->all(), [
         'latitude' => 'required',
         'longitude' => 'required',
     ]);

     if ($validator->fails()) {
         return $this->apiResponse(null , $validator->errors(), 400 );
     }
     $driver = DriverInf::where('email', $email)->first();
     if(!$driver)
     {
         return $this->apiResponse(null , ' The User Not found ! ' , 400 );
     }
     $driver->update($request->all());

         if($driver){
             return $this->apiResponse(new locationResource($driver) , 'Driver location Updated Successfully ' , 201 );
         }
  }


    // update car inf -> API
 public function update_car(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'car_number' => 'required',
        'car_model' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $car = Car::find($id);


    if(!$car)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }

    $car->update($request->all());
        if($car){
            return $this->apiResponse(new carResource($car) , 'Car Inf Updated Successfully ' , 201 );
        }

 }


   //  update health inf -> API
 public function update_health(Request $request , $id )
 {
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'pressure' => 'required',
        'diabetes' => 'required',
        'blood' => 'required',
        'diseases' => 'required',
        'surgeries' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }

    $health = Health::find($id);

    if(!$health)
    {
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
    }
    $health->update($request->all());

    if($health){
        return $this->apiResponse(new healthResource($health) , 'Health Inf Updated Successfully ' , 201 );
    }

 }


 // update attachents


 public function update_attachments(Request $request , $id)
{
    $validator = Validator::make($request->all(), [
        'driver_id' => 'required',
        'personal_photo' => 'required',
        'driver_licence' => 'required',
        'car_licence' => 'required',
    ]);

    if ($validator->fails()) {
        return $this->apiResponse(null , $validator->errors(), 400 );
    }


    $photo = Photo::find($id);
    $photo->driver_id = $request->driver_id;
       // personal photos
     if ($request->hasFile('personal_photo')) {

         $destination_path = 'public/images/personal';
         $personal = $request->file('personal_photo');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('filename1')->storeAs($destination_path,$image_name);

         $photo->filename1  = $image_name;
     }

       // Driver Licence
     if ($request->hasFile('driver_licence')) {

         $destination_path = 'public/images/driverLicences';
         $personal = $request->file('driver_licence');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('driver_licence')->storeAs($destination_path,$image_name);

         $photo->filename2  = $image_name;

     }

         /// Car License
     if ($request->hasFile('car_licence')) {

         $destination_path = 'public/images/carsLicences';
         $personal = $request->file('car_licence');
         $image_name = $personal->getClientOriginalName();
         $path = $request->file('car_licence')->storeAs($destination_path,$image_name);

         $photo->filename3  = $image_name;

     }
     $photo->save();
     return response()->json(['message' => 'Photos updated successfully']);
}

    // delete user  -> API
 public function destroy($id)
 {
      $driver = DriverInf::find($id);
      if(!$driver){
        return $this->apiResponse(null , ' The User Not found ! ' , 400 );
      }

      $driver->delete($id);
      if($driver){
        return $this->apiResponse(null , 'User Deleted Successfully ' , 200 );
      }
 }

}
