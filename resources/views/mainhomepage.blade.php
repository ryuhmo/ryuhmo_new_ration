
@extends('layout.layout')
@section('content')

<h2 class="welcome" >WELCOME TO RATION CARD ISSUANCE PORTAL</h2>
<p id="go">Government of Mizoram</p>
<p id="g1">Department of Information & Technology</p>
<p id="g2">Under Mizoram State e-Governance of Society(MSeGS)</p>
<div style="pic"><img src="/img/dg5.jpg" alt="dg logo" width="180px" height="140px">


</div>
<div class="menu-bar">

                <ul>
                    <li class="biz"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-user"></i>About Us</a></li>
                      
                    <li><a href="#"><i class="fa fa-clone"></i>Services</a></li>

                    <li><a href="#"><i class="fa fa-sign-in"></i>Logins<i class="fa fa-caret-down"></i></a>
                    <div class="sub-menu-1">
                          <ul>
                              <div class="drop">
                              <li><a href="/cscview">CSC Login</a><i class="fa fa-angle-double-right"></i></li>
                              <li><a href="/appform"><i class="fa fa-angle-double-right"></i>DCSO Login</a></li>
                              <li><a href="/forwarderview">Forwarder Login</a><i class="fa fa-angle-double-right"></i></li>
                              </div>
                            
                          </ul>
                      </div>
                   </li>
                       

                    <li><a href="/contact-us"><i class="fa fa-phone"></i>Contact Us</a></li>
                </ul>
              </div>
              <img src="/img/rat.jpg" alt="rat logo" width="100%" height="220 px">

             <h1> What is Ration Card</h1>

<p style="margin-left:16px">Ration Card is a government approved document which helps you in purchasing items<br>
such as food, grains, kerosene, etc. at subsidised rates. <br>
Ration card has been extremely helpful to those who are not so financially well off or belong to below <br>
poverty line (BPL) group and would find it difficult to purchase food items.<br>
Apart from that, a ration card also acts as a proof of identity and address and can be used for purposes<br>
such as applying for a domicile certificate, voter ID, etc.</p>

<h3 style="margin-left:50px">Types of Ration Card</h3>
<h4 style="margin-left:50px" ><mark>There are two types of Ration Card:</mark></h4>

<mark style="margin-left:50px"><italic>White Ration Card:</italic></mark> 
<p style="margin-left:50px">You can apply for a white ration card if you are above the poverty line.<br>
The white color indicates that you are a citizen of India who is above the poverty line.<br>
Blue/Red/Green/Yellow Ration Card:<br>
 These types of ration cards are given to those who are below the poverty line. <br>
  This ration card helps them in purchasing food items at subsidised rates.</p>
   
@endsection
