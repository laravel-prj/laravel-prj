@extends('customer.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
{{--custom css item suggest search--}}
<style>
    .a1{
      padding-left: 50px;
      position: relative;
      letter-spacing: .5em;
      text-transform: uppercase;
    }
    .a1::before{
      content: "";
      position: absolute;
      background-color: currentColor;
      left: 0;
      top: 50%;
      height: 1px;
      width: 20px;
    }
    .div1{
      display: block;
      font-size: 14px;
      line-height: 1.71;
      padding-bottom: 40px;
    }
    .image{
      width: 110px;
      height: 150px;
      margin-bottom: 45px;
      position: relative;
    
  }
    .image1{
      width: 300px;
      position: absolute;
      padding-top: 20px;
      margin-left: -50px;
    }
    .form{
      display: block;
      padding-bottom: 40px;
      padding: 39px 0 100px;
    }
    .form1{
      width: 100%;
      padding-right: 0;
      margin-bottom: 40px;
      display: inline-block;
      vertical-align: top;
      position: relative;
    }
    .div2{
      font-size: 20px;
      color: #1b1c1e;
      line-height: 38px;
      margin-bottom: 20px;
    }
    .input{
      width: 100%;
      margin-bottom: 20px;
      opacity: 1;
  }
    .inputaria{
      width: 100%;
      margin-bottom: 20px;
      display: inline-block;
      vertical-align: top;
      width: 230px;
      height: 40px;
      position: relative;
  }
    .button{
      width: 140px;
      height: 25px;
      padding-top: 12px;
      position: absolute;
      left: 470px;
      bottom: -90px;
      z-index: 2;
      display: inline-block;
      cursor: pointer;
      border: 0;
      background: transparent;
      border-radius: 0;
      font-family: Gotham,sans-serif;
      font-weight: 700;
      text-align: center;
      font-size: 0.9em;
      line-height: 1em;
      letter-spacing: .16667em;
      padding: 1.58333em 3.33333em;
      text-transform: uppercase;
      max-width: 100%;
      min-width: 200px;
      background: #fff;
      color: #000;
      box-sizing: border-box;
      border: 2px solid #000;
      height: 50px;
      
    }
  
    .adress{
      line-height: 2.29;
      font-size: 14px;
      color: #000;
    }
    #sec3{
         height: 300px;
         font-size: 0.7cm;
         text-align: center;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         background-color: rgb(236, 229, 229);
       }
  </style>
@stop
@section('content')
<div class="container-storage">
    <section style="background: #f6f6f7; padding: 12.22222em 0 4.16667em;">
        <div class="container" style="max-width: 1260px; width: 100%; margin: auto;">
          <div class="title black">
            <small class="a1" style="font-size: 20px;">CONTACT US</small>
            <h3>Our customer support team is here to help</h3>
          </div>

        </div>
    </section>
    <section>
      <div class="container" style="max-width: 1260px; width: 100%; margin: auto">
        <div class="div1">
          <div class="image">
            <img src="{{asset('customer/img/contactus.png')}}" class="image1">
          </div>
          <div style="font-size: 17px;">
            Meet the MO Team
            <br>
            If you have any questions we promise to get back to you within 24 hours
          </div>
        </div>
        <hr>
        <div class="form">
          <form class="form1" data-contact-form>
            <div class="div2">Fill out this form</div>
            <div class="input">
             <input type="text" name="name" placeholder="your name" id="name" style="width: 460px; height: 40px; font-size: 17px;padding: 0 40px 0 20px">
             <span id="errorname" style="color: red; font-size: 16px;"></span>
             
            </div>
            <div class="input"><input type="text" name="email_number" placeholder="Your email address or phone number" id="email" style="width: 460px; height: 40px;padding: 0 40px 0 20px; font-size: 17px;">
             <span id="erroremail" style="color: red; font-size: 16px;"></span> </div>
            
            <div class="inputaria">
              <textarea name="message" placeholder="message" id="message" style="width: 460px; height: 150px;padding: 0 40px 0 20px; font-size: 17px; padding-top: 6px;"></textarea>
            </div>
            <input type="button" value="send" onclick="getinfo()" class="button">

          </form>
          <div class="right" style="position: relative; left: 650px; top: -375px; width: 500px;">
            <div class="div2">or search us here</div>
            <div style="align-items: center; padding-top: 7px;display: flex;justify-content: space-between;"></div>
            <a href="">   <svg class="svg svg-facebook" viewBox="0 0 24.5 24.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="  width: 24px;height: 24px; display: inline-flex;"><path d="M21.2,0H3.3C1.5,0,0,1.5,0,3.3v17.9c0,1.8,1.5,3.3,3.3,3.3h8.8l0-8.8H9.9
                  c-0.3,0-0.5-0.2-0.5-0.5l0-2.8c0-0.3,0.2-0.5,0.5-0.5h2.3V9.1c0-3.2,1.9-4.9,4.8-4.9h2.3c0.3,0,0.5,0.2,0.5,0.5v2.4
                  c0,0.3-0.2,0.5-0.5,0.5l-1.4,0c-1.5,0-1.8,0.7-1.8,1.8v2.4h3.4c0.3,0,0.6,0.3,0.5,0.6l-0.3,2.8c0,0.3-0.3,0.5-0.5,0.5h-3
                  l0,8.8h5.3c1.8,0,3.3-1.5,3.3-3.3V3.3C24.5,1.5,23,0,21.2,0z"></path>
                </svg></a>
         
            <span style="align-items: center; font-size: 20px; position: relative; top: -5px; left: 10px;" >MO shop</span>
            <a href=""><svg class="svg svg-instagram" viewBox="0 0 25.5 25.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"   style="  width: 200px;height: 24px;display: inline-flex; ">
              <path d="M18.5,0H7C3.2,0,0,3.2,0,7v11.4c0,3.9,3.2,7,7,7h11.4c3.9,0,7-3.2,7-7V7C25.5,3.2,22.3,0,18.5,0z M18.5,23.2H7
              c-2.6,0-4.8-2.1-4.8-4.8V7c0-2.6,2.1-4.8,4.8-4.8h11.4c2.6,0,4.8,2.1,4.8,4.8v11.4h0C23.2,21.1,21.1,23.2,18.5,23.2z M12.7,6.1
              c-3.7,0-6.6,3-6.6,6.6c0,3.7,3,6.6,6.6,6.6s6.6-3,6.6-6.6C19.4,9.1,16.4,6.1,12.7,6.1z M12.7,17.1c-2.4,0-4.3-1.9-4.3-4.3
              c0-2.4,1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3C17.1,15.1,15.1,17.1,12.7,17.1z M20.5,4.5c0.3,0.3,0.4,0.7,0.4,1.1c0,0.4-0.2,0.8-0.4,1.1
              c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.2-1.1-0.4C18,6.4,17.8,6,17.8,5.6c0-0.4,0.2-0.8,0.4-1.1c0.3-0.3,0.7-0.4,1.1-0.4
              C19.8,4.1,20.2,4.2,20.5,4.5z"></path>
            </svg></a>
            <span style="font-size: 20px; align-items: center; position: relative; left:-80px; top: -5px;">MO shop</span>
            <br><br>
            <a><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 23 18" style="enable-background:new 0 0 23 18; width:24px;height:24px;display: inline-flex; margin-bottom: 38px" xml:space="preserve">
              <style type="text/css">
                .st0{fill:none;stroke:#1B1C1E;stroke-width:2;}
                .st1{fill:none;stroke:#1B1C1E;stroke-width:2;stroke-linecap:round;}
              </style>
              <g>
                <path class="st0" d="M4,1h15c1.7,0,3,1.3,3,3v10c0,1.7-1.3,3-3,3H4c-1.7,0-3-1.3-3-3V4C1,2.3,2.3,1,4,1z"></path>
                <path class="st1" d="M1,6l10.5,5L22,6"></path>
              </g>
              </svg></a>
              <span style="position: relative; top:-43px; font-size: 20px; left: 10px;;">MO@gmail.com</span>
              <div class="adress">
                <small style="font-size: 18px;">Address: 590/Cach Mang Thang Tam Ward 8 District 3</small>

              </div>
          </div>
         
        </div>
      </div>
    </section>
</div>
@stop
@section('scripts')
{{--jquery.autocomplete.js--}}
{{-- <script src="{{asset('')}}https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
{{--quick defined--}}
<script>
    function getinfo(){
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
    
      if(name == ""){
        document.getElementById("errorname").innerHTML = "please enter your name";
      }
      else{
        document.getElementById("errorname").innerHTML = "";
      }
      if(email == ""){
        document.getElementById("erroremail").innerHTML = "please enter your email";
      }
      else{
        document.getElementById("erroremail").innerHTML = "";
      }
      if(name && email){
        alert('sent information');
      }
    }
    
  </script>
@stop