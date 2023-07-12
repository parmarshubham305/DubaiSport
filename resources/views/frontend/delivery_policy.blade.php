@extends('frontend.layouts.layout')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12 spacing-y">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Delivery <span class="text-primary">Policy</h2>
                </div>
                <h4 class="text-center fw-noraml">Below is the table of delivery charges applicable for each country.</h4>
                <div class="table-responsive mb-3">
                    <table class="bg-light m-auto table table-striped " width="100">
                        <tbody>
                            <tr>
                                <td class="border px-2 py-1" width="203"><strong>Country</strong></td>
                                <td class="border px-2 py-1" width="416"><strong>Delivery Charges</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">United Arab Emirates </td>
                                <td class="border px-2 py-1" width="416">Cart Value AED 250 or above, No
                                    delivery charge.
                                    Cart Value below AED 250, Delivery Charge of AED20.</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">Saudi Arabia </td>
                                <td class="border px-2 py-1" width="416">Cart Value SAR 1000 or above, No
                                    delivery charge.
                                    Cart Value below SAR 1000, Delivery Charge of SAR 250.</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">Kuwait </td>
                                <td class="border px-2 py-1" width="416">Cart Value KWD 100 or above, No
                                    Shipping charge
                                    Cart Value below KWD 100, Shipping charge of KWD 35</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">Qatar </td>
                                <td class="border px-2 py-1" width="416">Cart Value QAR 1000 or above, No
                                    Shipping charge
                                    Cart Value below QAR 1000, Shipping charge of QAR 350</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">Bahrain </td>
                                <td class="border px-2 py-1" width="416">Cart Value BHD 100 or above, No
                                    Shipping charge
                                    Cart Value below BHD 100, Shipping charge of BHD 35</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="203">Oman </td>
                                <td class="border px-2 py-1" width="416">Cart Value OMR 100 or above, No
                                    Shipping charge
                                    Cart Value below OMR 100, Shipping charge of OMR 25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>For orders received from remote locations (in UAE/KSA), there will be additional delivery charges
                    subject to the
                    location of delivery. Customers may contact our sales representatives to get more information about
                    such
                    additional charges.</p>
            </div>
            <div class="col-lg-8 col-12 pt-0 spacing-y">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Delivery & Shipping <span class="text-primary">lead Time</h2>
                </div>
                <h4> </h4>
                <div class="table-responsive mb-3">
                    <table class="table  table-striped bg-light m-auto" width="700">
                        <tbody>
                            <tr>
                                <td class="border px-2 py-1" width="175"><strong>Country</strong></td>
                                <td class="border px-2 py-1" width="170"><strong>Express Delivery</strong>
                                </td>
                                <td class="border px-2 py-1" width="284"><strong>Standard Delivery</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">United Arab Emirates </td>
                                <td class="border px-2 py-1" width="170">2-3 Business Days </td>
                                <td class="border px-2 py-1" width="284">3-4 Business Days </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">Saudi Arabia </td>
                                <td class="border px-2 py-1" width="170">3-5 Business Days </td>
                                <td class="border px-2 py-1" width="284">5-8 Business Days </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">Kuwait </td>
                                <td class="border px-2 py-1" width="170">Not Available</td>
                                <td class="border px-2 py-1" width="284">5-8 Business Days </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">Qatar </td>
                                <td class="border px-2 py-1" width="170">Not Available </td>
                                <td class="border px-2 py-1" width="284">5-8 Business Days </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">Bahrain </td>
                                <td class="border px-2 py-1" width="170">Not Available</td>
                                <td class="border px-2 py-1" width="284">5-8 Business Days </td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1" width="175">Oman </td>
                                <td class="border px-2 py-1" width="170">Not Available</td>
                                <td class="border px-2 py-1" width="284">5-8 Business Days </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>Under abnormal circumstances, the lead time may fluctuate depending on various irrepressible factors,
                    generally
                    being,</p>

                <ul>
                    <li>Unusual surge in orders, generally during a sale promotion period.</li>
                    <li>Unexpected Delays at Border Clearance May Slightly Affect the Delivery Lead times Up to 7
                        Working
                        Days for
                        International Shipments.</li>
                    <li>Delay in providing personal ID information for submission to shipping agent towards customs
                        authority
                        clearance as per shipping agent guidelines – applicable for Saudi Arabia, Kuwait, Qatar, Bahrain
                        and
                        Oman.
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-12 pt-0 spacing-y">
                <div class="page-header">
                    <h2 class="mb-0 text-center">Cash/Card on <span class="text-primary">Delivery Policy</h2>
                </div>
                <p class="text-center">Cash/Card on Delivery Limits and Charges:</p>
                <div class="table-responsive mb-3">
                    <table class="table table-striped bg-light m-auto" cellpadding="10" cellspacing="10" width="700">
                        <tbody>
                            <tr>
                                <td class="border px-2 py-1"><strong>Country</strong></td>
                                <td class="border px-2 py-1"><strong>Maximum Limit</strong></td>
                                <td class="border px-2 py-1"><strong>COD/Card Charges</strong></td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1">Saudi Arabia</td>
                                <td class="border px-2 py-1">SAR 15,000</td>
                                <td class="border px-2 py-1">SAR 30</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1">Kuwait</td>
                                <td class="border px-2 py-1">KWD 500</td>
                                <td class="border px-2 py-1">KWD 3</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1">Qatar</td>
                                <td class="border px-2 py-1">QAR 5000</td>
                                <td class="border px-2 py-1">QAR 30</td>
                            </tr>
                            <tr>
                                <td class="border px-2 py-1">Oman</td>
                                <td class="border px-2 py-1">OMR 500</td>
                                <td class="border px-2 py-1">OMR 3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-0 text-center"> Cash will be collected upon delivery of the equipment. Installation of the
                    equipment
                    shall be
                    completed within
                    48 hours from the time of delivery.</p>
                <p class="mb-0 text-center"> Cash/Card on Delivery is not applicable for orders that require
                    manufacturing of
                    customized
                    equipment and
                    specialized game tables.</p>
                <p class="mb-0 text-center">For Remote regions in UAE and KSA, Cash/Card on Delivery is not applicable.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="spacing-y bg-light">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Installation <span class="text-primary">Policy</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p>We offer free installation of equipment for orders received from UAE, KSA, Kuwait, Qatar, Bahrain
                    &amp; Oman.
                    Installation will be carried out by our technicians at your premises. This service is generally
                    applicable for
                    fitness &amp; sports equipment only. Installation service will not be covered for below items.
                </p>
                <ul>
                    <li>Brackets</li>
                    <li>Pull up Bars</li>
                    <li>Hooks for punching bags</li>
                    <li>Basketball Hoop</li>
                </ul>
                <p>
                    Items that require drilling will be inspected by our technicians and carried out as per their advice
                    only.
                    However, this service is presently available in the United Arab Emirates region only.
                    In KSA - Free installation shall be applicable for orders received from Riyadh, Jeddah, Damam and
                    other
                    provinces within a 100KM radius of these 3 cities. Additional charges shall be applicable for orders
                    received
                    outside this zone. Customer(s) can get in touch with our sales representatives to get more
                    information about the
                    charges.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="spacing-y">
    <div class="container">
        <div class="page-header">
            <h2 class="mb-0 text-center">Return &amp; Refund <span class="text-primary"> Policy</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <p><b>For United Arab Emirates</b>
                    You can initiate a return &amp; refund request within 14 days from the delivery of the product,
                    provided the
                    product is still in its original packing. After examining the condition of the returned product,
                    refund will be
                    initiated within 2-5 working days.
                    <b>Note</b> : The return and refund policy is not applicable to the manufacturing and pre-ordered
                    items.
                    <b>For Saudi Arabia</b>
                    You can initiate a return &amp; refund request within 14 days from the delivery of the product,
                    provided the
                    product is still in its original packing. After examining the condition of the returned product,
                    refund will be
                    initiated within 2-5 working days. However, this policy does not apply for the below categories:
                </p>
                <ul>
                    <li>Massage Chairs</li>
                    <li>Pool/Billiard Tables</li>
                    <li>Shoes &amp; Apparel</li>
                    <li>Bicycles</li>
                </ul>
                <b>Note</b> : The return and refund policy is not applicable to the manufacturing and pre-ordered items.
                <b>For Other GCC Countries</b>
                Presently, we do not have a return option for shipments to Kuwait, Qatar, Bahrain and Oman once the
                product is
                dispatched from warehouse. However, if the customer wants to cancel an order before dispatch, they may
                do so and get
                refund within 2-5 working days.
                <b>General</b>
                In case of equipment that requires installation, once the product is delivered and installed at the
                customer
                premises, the return request cannot be processed. However, at the time of installation, if any
                manufacturing defect
                is detected, the faulty part will be restored free of cost or the machine will be replaced completely as
                a final
                resolve. After examining the condition of the returned product, refund will be initiated within 2-5
                working days.
                For shoes &amp; apparels - Returns will be accepted only if:
                <ul>
                    <li>The product is unused, in original unsealed packaging and includes all tags</li>
                    <li>The return request is placed within 3 days of purchase.</li>
                </ul>
                <p>For hygiene purposes, the following items cannot be returned: wearable technology, nutrition
                    products, swimwear,
                    earplugs, goggles, swimming paddles/fins, sports bras, panties, socks, gloves, shoe laces, insoles,
                    bandages,
                    hand wraps, towels, mats and other similar items. Also, products that come in sealed packaging
                    cannot be
                    returned.</p>
            </div>
        </div>
    </div>
</section>
@stop