<html>
    <head>

    </head>
    <body>
        <div class="header">

           <div id="NavBar">
            <div class="topnav">
                <a class="active" href="#home">BCFT Retirement Home</a>
                <a href="#home">Home</a>
                <a href="#aboutUs">About us</a>
                <div class="topnav-right">
                  <a href="#about">Logout</a>
                </div>
              </div>
            </div>


            <!--Content before waves-->
            <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
            <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
            <g><path fill="#fff"
            d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
            C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
            c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7    c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2  c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
            </g>
            </svg>
            <h1>BCFT Retirement Home</h1>
            </div>
            <div class="box">
                <h3>Doctor's Home</h3>
                <div class="searchBar">
                    <form class="p-3">
                        <div class="col-12 col-md-8 container">
                            <input id="search-bar">
                        </div>
                        <button type="submit">Search</button>
                    </form>
                </div>
                <p>Past Appointments for John Smith</p>
            <div id="appointmentTables">
               <div id="pastAppointments">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Appt. Date</th>
                                <th>Comment</th>
                                <th>Morning Med</th>
                                <th>Afternoon Med</th>
                                <th>Night Med</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>10/27/23</td>
                                <td>Recovering well; John has been consistently taking meds</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                            <tr class="active-row">
                                <td>John Smith</td>
                                <td>11/30/23</td>
                                <td>John is entering last stage of treatment for bronchytis; plan to continue meds until further notice</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>John Smith</td>
                                <td>12/28/23</td>
                                <td>Treatment is complete</td>
                                <td>Yes</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="upcomingAppointments">
                    <p>Upcoming appointments for John Smith</p>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Appt. Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>10/27/23</td>
                            </tr>
                            <tr class="active-row">
                                <td>John Smith</td>
                                <td>11/30/23</td>
                            </tr>
                            <tr>
                                <td>John Smith</td>
                                <td>12/28/23</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!--Waves Container-->
            <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
            </div>
            <!--Waves end-->

            </div>
            <!--Header ends-->

            <!--Content starts-->
            <div class="content flex">
              <p> </p>
            </div>
            <!--Content ends-->



    </body>




    <style>

/* login form */

@import url(//fonts.googleapis.com/css?family=Lato:300:400);

body {
  margin:0;
}

#NavBar {
  position: sticky;
  top: 0;
  z-index: 9999;
  font-family: 'Lato', sans-serif;
    letter-spacing: 1px;
    font-size:14px;
    /* font-weight: bold; */
}

/* Add a black background color to the top navigation */
.topnav {
    background-color:  rgb(255, 255, 255, .8);
    overflow: hidden;
    /* border-bottom: 3px solid rgb(255, 255, 255); */
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  color: black
}

/* Change the color of links on hover */
.topnav a:hover {
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color: white;
  font-weight: bold;
  border-bottom: none;
}

/* Add a color to the active/current link */
.topnav a.active {
  /* background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);00 */
  background-color: #333333;
  color: white;
  font-weight: bold;
  border-right:  rgb(255, 255, 255, .8)  solid 3px;
  border-bottom: rgb(255, 255, 255, .8) solid 3px;

}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

button {
    display: inline-block;
    outline: 0;
    border: 0;
    cursor: pointer;
    font-family: 'Lato', sans-serif;
    letter-spacing: 1px;
    font-size:14px;
    color: rgb(255, 255, 255, .8);
    transition: box-shadow 0.15s ease,transform 0.15s ease;
    will-change: box-shadow,transform;
    background: #FCFCFD;
    box-shadow: 0px 2px 4px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #d6d6e7;
    height: 35px;
    padding: 0 32px;
    font-size: 18px;
    border-radius: 6px;
     color: #36395a;
     transition: box-shadow 0.15s ease,transform 0.15s ease;
        :active{
            box-shadow: inset 0px 3px 7px #d6d6e7;
            transform: translateY(2px);
                }
            }

    button:hover{
        box-shadow: 0px 4px 8px rgb(45 35 66 / 40%), 0px 7px 13px -3px rgb(45 35 66 / 30%), inset 0px -3px 0px #d6d6e7;
        transform: translateY(-2px);
    }

.styled-table {
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Lato', sans-serif;
    letter-spacing: 1px;
    font-size:14px;
    font-weight: bold;
    color: white;
    min-width: 400px;
    max-width: 800px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: rgb(255, 255, 255, .8);
    color: black;
    text-align: left;

}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: rgb(255, 255, 255, .8);
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid white;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: black;
}

#pastAppointments {
    margin-bottom: 50px;
}

#upcomingAppointments {
    margin-bottom: 50px;
}

#search-bar {
    height: 35px;
    border-radius: 48px;
    background: rgb(255, 255, 255, .8);
    width: 800px;
    padding-right: 40px;
    padding-left: 10px;
    margin-left: auto;
    margin-right: auto;
}

h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;

}
h3 {
  font-family: 'Lato', sans-serif;
  font-weight:800;
  letter-spacing: 0px;
  font-size:30px;
  color:  white;

}
p {
  font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

a {
    font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:20vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:10vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:10vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% {
    transform: translate3d(85px,0,0);
  }
}
.loginOrSignupForm h2{
    margin-top: 0px;
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}

.box input {
    background-color: #fff;
    height: 35px;
    padding: 5px 15px;
    line-height: normal;
    border: 1px solid #a6a6a6;
    border-top-color: #949494;
    border-radius: 3px;
    box-shadow: 0 1px 0 rgb(255 255 255 / 50%), 0 1px 0 rgb(0 0 0 / 7%) inset;
    outline: 0;
    font-family: 'Lato', sans-serif;
    letter-spacing: 1px;
    font-size:14px;
    color: #333333;
    border-radius: 6px;
    margin-bottom: 20px;
}

input:focus{
    border-color: rgba(0,172,193,1);
     box-shadow: 0 0 3px 2px rgb(228 121 17 / 50%);
                    }

input::placeholder {
    font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}

.box p, a {
    color: white
}


    </style>
</html>
