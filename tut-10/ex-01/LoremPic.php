<?php

class LoremPic
{

  // TODO: 
  // Make a private static property to hold the part of the 
  // image URLs that never change: https://picsum.photos/id


  // TODO:
  // Make public properties for this LoremPic object. The first 4 will
  // be initialized via the initFromApi helper method.
  //   - id
  //   - author
  //   - original width
  //   - original height
  //   - url



  // TODO:
  // Create a constructor that takes in an id and calls the initFromApi helper method
  // to initialize the first 4 public properties. It then should
  // initialize the url property so that it is a valid Lorem Picsum
  // url for the pic with width and height equal to the original
  // width and height of the picture.


  // This method uses PHP magic to query the Lorem Picsum API
  // for information about a picture with a given API.
  // (For example, here is the information the API would return
  // for the image with id 0: https://picsum.photos/id/0/info)
  private function initFromApi($id)
  {
    $curl = curl_init("https://picsum.photos/id/$id/info");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);

    // $result is actually a PHP object that has a number of
    // properties you can access. These properties are the ones
    // you can see by examining https://picsum.photos/id/0/info.
    $result = json_decode($response);

    // TODO:
    // Initialize the Lorem Pic properties for id, author, 
    // original width, and original height using the properties 
    // from $result

  }
}
