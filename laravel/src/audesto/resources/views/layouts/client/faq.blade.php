<!DOCTYPE html>
<html lang="en">

@include('layouts.client.partials.topbar')
<body>

  <!-- ======= Header ======= -->
  @include('layouts.client.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.client.partials.sidenav')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('client.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>1. what is the procedure for booking a car?</h6>
                <p></p>
              </div>

              <div class="pt-2">
                <h6>2. Why booking a car?</h6>                
              </div>

             

            </div>
          </div>

          <!-- F.A.Q Group 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Questions</h5>

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                      What do I need to rent a car?
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      You only need a credit or debit card to reserve a car.
                      Once at the rental office, you will need:

                      Your passport
                      Your voucher
                      The driving license of each driver
                      The main driver's credit card (only a few companies accept debit cards)
                      Important: make sure you read the rental conditions of the company renting you the vehicle. Each company has its own rules. Some may ask for additional ID, deny certain credit cards, or refuse to rent a car to a driver who has been licensed for less than 36 months.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                      Am I old enough for a car?
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Most car rental companies will rent you a car if you are at least 21 years old (or younger, for some companies). But if you're under 25, you may have to pay a young driver surcharge.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                      Can I reserve a rental car for someone else?
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Of course ! Simply enter the details of this person in the "Driver Information" section when booking.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                      How to choose the right car?
                    </button>
                  </h2>
                  <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      * Think about your destination. An SUV is great for the highways in Texas, but maybe in Rome you'll opt for a smaller car.
                      * Find out what other travelers think. Our site is packed with ratings and customer reviews so you can find out what travelers liked (or didn't) about each rental company.
                      * Think about the gearbox. In some countries, manual cars are much more common than automatics, while in others, the reverse is true. Remember to check before renting a car!
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                      Are all costs included in the car rental price?
                    </button>
                  </h2>
                  <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      The rates shown include vehicle rental, mandatory insurance (e.g. Theft Protection and Partial Collision Coverage) and charges which, if applicable, generally must be paid when the care of the vehicle (eg abandonment fees, airport taxes and local taxes).

                      Our rates also include additional services that you have already added (eg GPS or child seat rental).

                      They do not include the additional insurance that you can take out once at the agency.

                      Tip: you can view all the details of the fare to be paid on the payment page.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Most Recent Questions</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                      What should I do if I have not received my booking confirmation?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Most bookings are confirmed immediately. If you have not received a confirmation email, please check your spam.

                      You can also check the status of your reservation online:

                      On the app, tap "Reservations" at the bottom of the screen.

                      On the website, log in to your account and go to the “Rental Cars” page. Then click on “Manage booking”.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                      What is the status of my reservation?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      If you see that your reservation is not yet confirmed, it means that it is being processed. We will send you an e-mail as soon as it is confirmed. In the event that your reservation encounters a problem, we will inform you as soon as possible.
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                      Will I have some things to pay when picking up?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      The main driver must present a credit card in his name to cover the deposit. Very few rental companies accept debit cards for this. Please check the car rental conditions.

                      The rental company will also charge you for:

                      1. Options (e.g. GPS, child seats, etc.)

                      2. Fees (e.g. young driver fee, abandonment fee, etc.)

                      3. Any additional coverage you purchase from the rental company.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                      How can I access my online reservation?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      On the app, tap "Reservations" at the bottom of the screen.

                      On the website, log in to your account and go to the “Rental Cars” page. Then click on “Manage booking”.
                    </div>
                  </div>
                </div>              

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

          <!-- F.A.Q Group 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Orther</h5>

              <div class="accordion accordion-flush" id="faq-group-3">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                      What should I do to cancel my reservation?
                    </button>
                  </h2>
                  <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem eos nulla ab doloreIf you cancel your reservation more than 48 hours before its scheduled start date, you will receive a full refund*.

                      If you cancel it less than 48 hours in advance or at the time of pick-up at the rental agency, we will refund* the amount of your reservation minus the rate corresponding to 3 days of rental. If the duration of your rental is less than or equal to 3 days, you will therefore not receive any refund.
                      
                      If you cancel it after the scheduled start date, or if you do not come to the rental location, you will not receive a refund.
                      
                      * Cars accompanied by a "Non-refundable" mention do not entitle you to any refund.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                      Can I go to another pay with the rental car?
                    </button>
                  </h2>
                  <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      First of all, fees may apply.

                        Do you want to pick up the car in one country and return it to another?

                        1. If you book online, indicate the pick-up location and drop-off location on our homepage.

                        2. If you book by phone, just let us know at the time.

                        You want to go to another country, but you want to return the car to the same place of pick-up?

                        1. If you book online, open the rental conditions, go to the “Additional services (to be paid at the counter)” section, then look at the “Cross-border travel” and “Cross-border travel rules” sections.

                        2. If you book by phone, just let us know at the time.

                        3. In all cases, check with the agency staff at the time of pick-up.
                    </div>
                  </div>
                </div>              

              </div>

            </div>
          </div><!-- End F.A.Q Group 3 -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.client.partials.footer')
</body>

</html>