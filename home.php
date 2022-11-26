<?php
session_start();
if (isset($_SESSION['username']))
    print_r("Yes");
else {
    print_r("No");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 GEU portal</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo">c<span class="fas fa-virus"></span>vid-Shield</a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">home</a></li>
                <li><a href="#symtoms">myths&facts</a></li>
                <li><a href="#vaccine">Vaccine Tracker</a></li>

                <li><a href="#handwash">resources</a></li>

                <li><a href="logout.php">Login?Register</a></li>


                <li><button class="button" id="themedark" onclick="myFunction()"><i class="far fa-moon"></i></button>
                </li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">

            <span>Let's fight Covid-19</span>
            <h3>We are in this together</h3>
            <p>"Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so
                that we may fear less."</p>
            <a href="#protect" class="btn">Donate Plasma</a>
            <a href="#protect1" class="btn">Accept Plasma</a>

        </div>

        <div class="image">
            <img src="images/cpic1.PNG" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <section class="protect" id="protect">

        <h1 class="heading">before you <span>donate</span> plasma</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/cpic4.png" alt="">
                <h3>Stay hydrated</h3>
                <p>Drink 6 to 8 cups of water or juice the day before and on the day of your donation.</p>
                <a href="https://www.healthline.com/nutrition/7-health-benefits-of-water#1.-Helps-maximize-physical-performance"
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/cpic5.png" alt="">
                <h3>Get a good night’s sleep.</h3>
                <p>Tired minds don't plan well. sleep first, plan later.</p>
                <a href="https://www.healthline.com/nutrition/10-reasons-why-good-sleep-is-important"
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/cpic6.png" alt="">
                <h3>save strength</h3>
                <p>After you donate plasma, Don’t exercise hard or for very long.</p>
                <a href="https://blog.nasm.org/fitness/donating-blood-and-exercise-what-athletes-should-know#:~:text=After%20donation%2C%20your%20body%20goes,or%20plasma%20normalizes%20(9)."
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>
            <div>
                <a href="donorform.php" class="btn">Donate Plasma</a>
            </div>

        </div>
    </section>

    <section class="protect" id="protect1">

        <h1 class="heading">after you <span>accept</span> plasma</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/h.png" alt="">
                <h3>eat healthy</h3>
                <p>ensure that the patient rests, drinks plenty of fluids and eats nutritious food.</p>
                <a href="https://www.who.int/campaigns/connecting-the-world-to-combat-coronavirus/healthyathome/healthyathome---healthy-diet#:~:text=While%20no%20foods%20or%20dietary,and%20some%20types%20of%20cancer."
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/social.png" alt="">
                <h3>maintain social distancing</h3>
                <p>place patient in properly ventilated single room.</p>
                <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/social-distancing.html#:~:text=Social%20distancing%2C%20also%20called%20%E2%80%9Cphysical,both%20indoor%20and%20outdoor%20spaces."
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src="images/panic2.png" alt="">
                <h3>don't panic</h3>
                <p>don't stress, don't worry. you are blessed! stay calm, stay cool and don't be depressed.</p>
                <a href="https://www.healthline.com/health/anxiety/effects-on-body#:~:text=Long%2Dterm%20anxiety%20and%20panic,headaches%2C%20dizziness%2C%20and%20depression."
                    onclick="window.open(this.href,'_self')" class="btn">learn more</a>
            </div>
            <div>
                <a style="margin-bottom:10px;" href="acceptorform.php" class="btn">Accept Plasma</a>
            </div>

        </div>

    </section>


    <!-- symtoms section starts  -->

    <!-- prevent section starts  -->

    <section class="prevent" id="symtoms">

        <div class="row">

            <div class="image">
                <img src="images/1.png" alt="">
            </div>

            <div class="content">
                <h1 class="heading"> <span>Myths</span> about plasma donation.</h1>
                <ul>
                    <li>If I donate my plasma, my immunity level will drop.</li>
                    <li>I cannot donate plasma again.</li>
                    <li>If a patient has a pre-condition (illness like diabetes, hypertension or cardiac), he or she
                        doesn’t qualify to be a receiver.</li>
                    <li>One donor can save only one life</li>
                </ul>
            </div>

        </div>

        <div class="row">

            <div class="content">
                <h1 class="heading"><span>Reality</span> about plasma donation.</h1>
                <ul>
                    <li>The medical team only collects the plasma. It has to be noted that collecting plasma is
                        different from collecting blood. It is the liquid component of the blood. Only the antibody is
                        taken from the body, the blood (WBC and RBC) is flushed back into your system. In short, the
                        manufacturing unit in our body remains with us.</li>
                    <li>Unlike blood, plasma regenerates within four hours of donation. So, one can donate plasma again
                        in 15 days. But plasma is usually taken within one or two months of getting infected, as that is
                        when the antibody level is the highest. After three-four months, the antibody level will be the
                        lowest.</li>
                    <li>Based on the condition or the severity of the illness the medical experts will take a call if
                        plasma treatment can be given to the patient.</li>
                    <li>Most of the time, one donor’s plasma can save two lives. At times some plasma receivers may need
                        two units (200 ml each).</li>
                </ul>
            </div>

            <div class="image">
                <img src="images/ph.png" alt="">
            </div>

        </div>

    </section>

    <!-- symtoms section ends -->


    <section class="prevent vaccine" id="vaccine">
        <div class="row">
            <div class="boxes">
                <p class="heading">FAQs</p>
                <div class="faqs">
                    <details>
                        <summary>Which COVID-19 vaccines are licensed in India?</summary>
                        <p class="text">Two vaccines that have been granted emergency use authorization by the Central
                            Drugs Standard Control Organization (CDSCO) in India are Covishield® (AstraZeneca's vaccine
                            manufactured by Serum Institute of India) and Covaxin® (manufactured by Bharat Biotech
                            Limited).</p>
                    </details>
                    <details>
                        <summary>Have the vaccines undergone the needed clinical trials before EUA?</summary>
                        <p class="text">Both the Indian COVID-19 vaccines have completed their Phase I & II trials.
                            Covishield® has completed its Phase III trials in UK and the bridging trial in India.</p>
                    </details>
                    <details>
                        <summary>If I have received vaccine as a health worker, how will my family members receive the
                            vaccine (as they are exposed as well)?</summary>
                        <p class="text">The people at highest risk of exposure such as health care and frontline workers
                            will receive the vaccine on priority. These personnel are also likely source of infection of
                            their family members. Other family members will be vaccinated according to the age specific
                            prioritization by the Government of India.</p>
                    </details>
                    <details>
                        <summary>
                            Is COVISHIELD® same as the vaccine been given in UK by Astrazeneca?
                        </summary>
                        <p class="text">Yes, Covishield® vaccine, manufactured by the Serum Institute of India, is based
                            on the same patent technology as the Astrazeneca vaccine.</p>
                    </details>

                    <details>
                        <summary>
                            What is the dose schedule of both the vaccines?
                        </summary>
                        <p class="text">The time interval between two doses of the Covishield vaccine has been extended
                            from four-six weeks to four-eight weeks. The second dose of Covaxin can be taken four to six
                            weeks after the first.</p>
                    </details>

                    <details>
                        <summary>
                            Can a person presently having COVID-19 (confirmed or suspected) infection be vaccinated?
                        </summary>
                        <p class="text">Person with confirmed or suspected COVID-19 infection may increase the risk of
                            spreading the same to others at vaccination site. For this reason, infected individuals
                            should defer vaccination for 14 days after symptoms resolution.</p>
                    </details>

                    <details>
                        <summary>
                            Do I need to use the mask/other COVID-19 appropriate precautions after receiving the
                            vaccine?
                        </summary>
                        <p class="text">Yes, it is absolutely necessary that everyone who has received the COVID-19
                            vaccine should continue to follow the COVID-19 appropriate behaviour i.e., mask, do gaj ki
                            doori and hand sanitization to protect themselves and those around from spreading the
                            infection.</p>
                    </details>

                    <details>
                        <summary>
                            What precautions I need to take after receiving the vaccine?
                        </summary>
                        <p class="text">Both the vaccines are safe but in case of any discomfort or complaint, ask the
                            beneficiary to visit the nearest health facility and/or call the health worker whose phone
                            number is given in the Co-WIN SMS received after vaccination.</p>
                    </details>

                    <details>
                        <summary>
                            Is it important for me to receive the same vaccine during second dose?
                        </summary>
                        <p class="text">As the vaccines available are not interchangeable, it is important to receive
                            the second dose of same vaccine as the first one. The Co-WIN portal is also going to help to
                            ensure that everyone receives the same vaccine.</p>
                    </details>
                    <details>
                        <summary>
                            Where should I register for the vaccination?
                        </summary>
                        <p class="text">Register on the Co-WIN Portal and schedule your vaccination appointment.
                            https://www.cowin.gov.in/home</p>
                    </details>


                    <details>
                        <summary>
                            Will I get any certificate that I am vaccinated?
                        </summary>
                        <p class="text">Yes, a provisional certificate would be provided after the first dose. On
                            completion of second dose, when you receive the message for completion of schedule it would
                            include a link to download digital certificate of vaccination for your perusal.</p>
                    </details>
                </div>
            </div>

        </div>
        <div class="vacc" style="display: flex;justify-content: center;align-items: center;">
            <a href="api.php" class="btn">vaccine tracker</a>
        </div>

    </section>






    <!-- handwash section starts  -->
    <section class="handwash" id="handwash" style="min-height: 80vh;">

        <h1 class="heading">Covid-19 and it's resources <span>#IndiaFightsCorona</span></h1>
        <div class="box-container">
            <div class="box">
                <p><a href="https://self4society.mygov.in/" target="_blank">self4society.mygov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://web.umang.gov.in/web_new/login?redirect_to=&utm_source=MyGov&utm_medium=MyGovCovid-19"
                        target="_blank">web.umang.gov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://covidhelp.teamsaath.me/dl/ewAiAHQAIgA6ADAALAAiAHMAIgA6ACIAYwBsAGEAcwBzAC0AUwBoAGUAZQB0ADEAIgAsACIAcgAiADoAIgBzAGIAQgBGAHoAMAA4ADgAUgBiAC0AbgBZAEIAZAB4AEMAVABCAEgAWQBBACIALAAiAG4AIgA6ACIAQQBtAGIAdQBsAGEAbgBjAGUAIABTAGUAcgB2AGkAYwBlAHMAIgB9AA%3D%3D"
                        target="_blank">covidhelp.teamsaath.me</a></p>
            </div>
            <div class="box">
                <p><a href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/tab/46?id=DASHBOARD_601b9e214c7a6b689d76f493&tabId=46&home=1"
                        target="_blank">sprinklr</a></p>
            </div>
            <div class="box">
                <p><a href="https://www.cowin.gov.in/home" target="_blank">cowin.gov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://covid19.uk.gov.in/bedssummary.aspx" target="_blank">covid19.uk.gov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://www.mygov.in/covid-19" target="_blank">mygov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://www.aarogyasetu.gov.in/applink/" target="_blank">aarogyasetu.gov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://www.mohfw.gov.in/" target="_blank">mohfw.gov.in</a></p>
            </div>
            <div class="box">
                <p><a href="https://www.nhp.gov.in/" target="_blank">nhp.gov.in</a></p>
            </div>
        </div>
    </section>
    <!-- handwash section ends -->


    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Covid-Shield is a portal developed to help people in these trying times and get information and
                    resources about Covid 19 in India</p>
            </div>

            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#symtoms">Myth&facts</a>
                <a href="#handwash">Resources</a>
                <a href="login.php">Login/Register</a>
            </div>


            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> +123-456-7890. </p>
                <p> <i class="fas fa-envelope"></i> covid.mailings@gmail.com </p>
                <p> <i class="fas fa-map-marker-alt"></i> dehradun, india - 248001. </p>
                <div class="share">
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

        </div>


    </section>

    <!-- footer section ends -->

    <!-- scroll top  -->

    <a href="#home" class="scroll-top">
        <img src="images/rocket.png" alt="">
    </a>








    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
    <script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark");

    }
    </script>


</body>

</html>