<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Home page
        </title>
        <style>
        .container 
        {
            overflow: hidden;
            border-top: none;
            
            padding-top: 5px;
            padding-left: 30px;
        }

        .container img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .tabContent
        {
            color:white;
            display: none;
            padding: 6px 12px;
            border-top: none;
            padding-top: 40px;
            padding-left: 100px;
            padding-right: 100px;
            animation: fade 1s;
            column-count: 2;
            font-size: 150%;
        }

        /* .tabContent1
        {
            color:white;
            display: none;
            padding: 6px 12px;
            border-top: none;
            padding-top: 40px;
            padding-left: 100px;
            padding-right: 100px;
            animation: fade 1s;
            column-count: 1;
            font-size: 150%;
        } */
        
        @keyframes fade 
        {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        .button
        {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            float: right;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .buttonEffect 
        {
            background-color:rgb(119, 119, 119);
            color:white;
            border: none;
        }
        .buttonEffect:hover 
        {
            background-color: white;
            color: #082f61;
        }
        .layer {
            /* background-image: linear-gradient(to right,rgba(255, 255, 255, 0.377),rgba(255, 255, 255, 0)); */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
        }
        .justice{
            /* padding: 6px 12px; */
            /* border-top: none; */
            /* display:flex; */
            /* justify-content:right; */
            font-size :40px;
            color:white;
            font-family:"Lucida Console", "Courier New", monospace;
            /* -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black; */
            /* text-shadow: -1px 1px 0 #000,
                          1px 1px 0 #000,
                         1px -1px 0 #000,
                        -1px -1px 0 #000;
            animation: fade 1s;
            
            column-count: 2; */
        }
        #bg 
        {
            background-image: url('images/la.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .check{
            margin: 100px 0 0 800px;
            text-shadow: -1px 1px 0 #000,
                          1px 1px 0 #000,
                         1px -1px 0 #000,
                        -1px -1px 0 #000;
         font-family:"Lucida Console", "Courier New", monospace;
         font-size :30px;
        }
        </style>                    
    </head>
    <body id="bg">
        <div class="layer">             
        <div class="container" >
            <a href="./index.php"><img src="images/logo.jpg" alt="logo" ></a>
            <button type="button" class="button buttonEffect"  onclick="location.href='portal.php'" >Login</button>
            <button type="button" class="button buttonEffect"  onclick="openTab(event, 'offices')">Offices</button>
            <button type="button" class="button buttonEffect"  onclick="openTab(event, 'Services')">Services</button>
            <button type="button" class="button buttonEffect"  onclick="openTab(event, 'contactUs')">Contact us</button>
            <button type="button" class="button buttonEffect"  onclick="openTab(event, 'AboutUs')">About us</button>
            <button type="button" class="button buttonEffect"  onclick="openTab(event, 'Home')">Home</button>
        </div>

        <div id="Home" class="tabContent check" style="column-count: 1;">            
               
        <h1>Injustice <br>Anywhere <br>is a <br>Threat to <br>Justices <br>Everywhere</h1>
              
        </div>
        
           
       
        
        <div id="AboutUs" class="tabContent" >            
                This website is for informational purposes only, and not an offer, recommendation or solicitation of any product, strategy service or transaction. Any views, strategies or products discussed on this site may not be appropriate or suitable for all individuals and are subject to risks. Prior to making any investment or financial decisions, an investor should seek individualized advice from a personal financial, legal, tax and other professional advisors that take into account all of the particular facts and circumstances of an investor's own situation. 
                <br>
                Investments in alternative investment strategies is speculative, often involves a greater degree of risk than traditional investments including limited liquidity and limited transparency, among other factors and should only be considered by sophisticated investors with the financial capability to accept the loss of all or part of the assets devoted to such strategies.
                <br>
                Borrowing with securities as collateral involves certain risks, including the possibility that you may need to deposit additional securities and/or cash in the account to meet a maintenance call, and that securities in the account may be sold to meet the maintenance call.  Proper management of your account and a thorough understanding of the conditions that may affect your investments will assist you in effectively using the margin lending program.​
                
                
              
        </div>

        <div id="contactUs" class="tabContent">
            <p> online support - TOLL FREE<br>
                678901-2345</P>
                <P>TechNICAL Support - Toll Free<br>
                789012-3456</p>
                
                <address>
                    Software Team,<br>
                    beside vit vellore,<br>
                    632014.
                </address>
                
        </div>

        <div id="Services" class="tabContent">
            <p>We have diversified areas of practice as below :
                <br><b> a. Advisory </b>–  Our full-service law firm advises in every law with a specialization in Indirect taxes, IPR, Contracts, International Trade Laws, Corporate Laws, Commercial Laws  etc .
                <br><b> b. Mediation & Arbitration </b>– We handle all Alternative methods of Disputes resolution  where differences lead to mediation & conciliation as well as  disputes leading to commercial arbitration for our domestic & international clients .
                <br><b> c. Non Litigation </b> – We carry out Contract Drafting,  Trademarks and Copyrights Registrations, Various Agreements & Legal Vetting, Due Diligence Reports, etc.
                <br><b>d. Litigation </b> – The law firm provides the litigation services in the following areas of law :
                <br>Other areas of work include the following:
                Advance Rulings
                Anti Dumping Duty
                Companies Law
                Contracts Laws,
                Consumer Protection & Product Liability,
                Corporate/Commercial Advisory,
                Export & Import
                Infrastructure,
                Real Estate
                Regulatory & Public Policy,
                Retail,
                Sales Tax & VAT
                Trusts, etc.</p>
        </div>

        <div id="offices" class="tabContent">
            <p>India (Headquators)
                <br>
                Hydrabad
                <br>
                + Maharastra
                <br>
               AP<br>
                + Bangalore<br>
                </p>
        </div>
    </div>
        <script>
            function openTab(evt, tabName) 
            {
                var i, tabcontent, button;
                tabcontent = document.getElementsByClassName("tabContent");
                for (i = 0; i < tabcontent.length; i++) 
                {
                    tabcontent[i].style.display = "none";
                }
                button = document.getElementsByClassName("button buttonEffect");
                for (i = 0; i < button.length; i++) 
                {
                    button[i].className = button[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
            }

            
        </script>
    </body>
</html>