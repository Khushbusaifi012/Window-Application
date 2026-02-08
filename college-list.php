<?php include 'header2.php'; ?>

<style>
	.contact-us-area {
    padding: 56px 0 0;
}
.section-title.section-center {
    text-align: center;
}
.section-title {
    margin-bottom: 14px;
}
input[type="text"], input[type="password"], input[type="email"], input[type="number"], input[type="tel"], textarea {
    font-size: 15px;
    background-color: var(--color-white);
    box-shadow: none;
    padding: 0 25px;
    outline: none;
    border: none;
    border-radius: 5px;
    color: var(--color-heading);
}
input {
    height: 50px;
}
select {
    -webkit-transition: 0.3s;
    transition: 0.3s;
    height: 50px;
    padding: 10px 20px;
    outline: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: 0 none;
    border-radius: 3px; 
    font-size: 17px;
    font-weight: 700;
    background: url(images/arrow-icon.png) 88% center no-repeat transparent;
    background-color: #f0f4f5;
    min-width: 160px;
    cursor: pointer;
}
.form-group .submit-btn {
    padding: 0 33px;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    margin: 0 0 30px;
    width: 100%;
}
table thead th {
    font-weight: 700;
}
td{
    border: 1px solid #000;
    padding: 7px 10px;
}
tr a {
    color: #084EA2;
}
</style>

<div class="contact-us-area">
    <div class="container ">
        <div class="section-title section-center sal-animate " data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

            <form id="myUniversity" class="rnt-contact-form rwt-dynamic-form">
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" class="" placeholder="Search By University" name="university_name" id="university_name">
                    </div>

                    <div class="col-sm-3">
                        <select class="funiversity_type" name="university_type" id="university_type">
                            <option value="">University Type</option>                          
                            <option value="5">Deemed to be University</option>
                            <option value="9">State Private University</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <select class="state_name" name="state_name" id="state_name">
                        <option value="">State Name</option>
                        <option value="1">Central</option>
                            <option value="2">Andhra Pradesh</option>
                            <option value="3">Assam</option>
                            <option value="4">Bihar</option>
                            <option value="5">Chandigarh</option>
                            <option value="6">Chhattisgarh</option>
                            <option value="7">Goa</option>
                            <option value="8">Gujarat</option>
                            <option value="9">Haryana</option>
                            <option value="10">Himachal Pradesh</option>
                            <option value="11">Jammu and Kashmir</option>
                            <option value="12">Jharkhand</option>
                            <option value="13">Karnataka</option>
                            <option value="14">Kerala</option>
                            <option value="15">Madhya Pradesh</option>
                            <option value="16">Maharashtra</option>
                            <option value="17">Manipur</option>
                            <option value="18">Meghalaya</option>
                            <option value="19">Odisha</option>
                            <option value="20">Pondicherry</option>
                            <option value="21">Punjab</option>
                            <option value="22">Rajasthan</option>
                            <option value="23">Sikkim</option>
                            <option value="24">Tamil Nadu</option>
                            <option value="25">Telangana</option>
                            <option value="26">Tripura</option>
                            <option value="27">Uttar Pradesh</option>
                            <option value="28">Uttarakhand</option>
                            <option value="29">West Bengal</option>
                        </select>

                    </div>

                    <div class="col-sm-2 form-group">
                        <input type="button" class="rn-btn edu-btn btn-medium submit-btn" name="save" id="save" value="Search University" onclick="callForForm()">
                    </div>

                </div>
            </form>
        </div>


        <div class="row g-5">
            <div class="col-12">
                <div class="">
                    <div class="">
                        <h5 class="card-title-">Total Universities:-129</h5>
                        <div class="table-responsive">
                            <table id="myTable" class="table-bordered table-responsive table- header-border-">
                                <thead>
                                    <tr class="table-active">
                                        <th>Universities Name</th>
                                        <th>Universities Category</th>
                                        <th>State Name</th>

                                    </tr>
                                </thead>
                                <input type="hidden" name="total_count" id="total_count" value="129">

                                <tbody>
                                    <tr id="post-list">
                                    </tr>
                                    <tr class="post-item" id="129">
                                        <td><a href="#">Gujarat University of Transplantation Sciences</a></td>
                                        <td>State Govt University</td>
                                        <td>Gujarat</td>
                                    </tr>

                                    <tr class="post-item" id="128">
                                        <td><a href="#">Statutory Autonomous, Bhopal Memorial</a></td>
                                        <td>Central Autonomous</td>
                                        <td>Madhya Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="127">
                                        <td><a href="#">Shri Venkateshwara University, Gajraula</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="126">
                                        <td><a href="#">Atal Bihari Vajpayee Medical University, Lucknow</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="125">
                                        <td><a href="#">Parul University, Vadodara</a></td>
                                        <td>State Private University</td>
                                        <td>Gujarat</td>
                                    </tr>

                                    <tr class="post-item" id="124">
                                        <td><a href="#">Gandhi Institute of Technology and Management (GITAM University) Deemed, Visakhapatnam</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Andhra Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="123">
                                        <td><a href="#">National Board of Examinations in Medical Sciences</a></td>
                                        <td>NBE</td>
                                        <td>Delhi</td>
                                    </tr>

                                    <tr class="post-item" id="122">
                                        <td><a href="#">West Bengal University of Health Sciences,Kolkata</a></td>
                                        <td>State Govt University</td>
                                        <td>West Bengal</td>
                                    </tr>

                                    <tr class="post-item" id="121">
                                        <td><a href="#">Uttar Pradesh University of Medical Sciences, Etawah</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="120">
                                        <td><a href="#">Dr. Shakuntala Misra National Rehabilitation University, Lucknow</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="119">
                                        <td><a href="#">Rama University, Kanpur</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="118">
                                        <td><a href="#">M J P Rohilkhand University</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="117">
                                        <td><a href="#">Dr. Ram Manohar Lohia Avadh University, Faizabad</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="116">
                                        <td><a href="#">Integral University, Lucknow</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="115">
                                        <td><a href="#">Mahatma Gandhi Kashi Vidyapith, Varanasi</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="114">
                                        <td><a href="#">Santosh University</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="113">
                                        <td><a href="#">Sharda University, Greater Noida</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="112">
                                        <td><a href="#">Bareilly International University, Bareilly</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="111">
                                        <td><a href="#">Swami Vivekanand Subharti University, Meerut</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="110">
                                        <td><a href="#">Deen Dayal Upadhyay Gorakhpur University, Gorakhpur</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="109">
                                        <td><a href="#">Sanjay Gandhi Post Graduate Instt. of Medical Sciences (Statutory Autonomous) ,Lucknow</a></td>
                                        <td>State Autonomous</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="108">
                                        <td><a href="#">Teerthanker Mahaveer University, Moradabad</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="107">
                                        <td><a href="#">Bundelkhand University</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="106">
                                        <td><a href="#">C.S.J.M. University, Kanpur</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="105">
                                        <td><a href="#">Era University, Lucknow</a></td>
                                        <td>State Private University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="104">
                                        <td><a href="#">Ch. Charan Singh Universitiy, Meerut</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="103">
                                        <td><a href="#">King George's Medical University, Lucknow</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="102">
                                        <td><a href="#">Banaras Hindu University</a></td>
                                        <td>Central University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="101">
                                        <td><a href="#">Aligarh Muslim University</a></td>
                                        <td>Central University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="100">
                                        <td><a href="#">Dr B R Ambedkar University,Agra, U.P.</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttar Pradesh</td>
                                    </tr>

                                    <tr class="post-item" id="99">
                                        <td><a href="#">Shri Guru Ram Rai University</a></td>
                                        <td>State Private University</td>
                                        <td>Uttarakhand</td>
                                    </tr>

                                    <tr class="post-item" id="98">
                                        <td><a href="#">HNB Uttarakhand Medical Education University</a></td>
                                        <td>State Govt University</td>
                                        <td>Uttarakhand</td>
                                    </tr>

                                    <tr class="post-item" id="97">
                                        <td><a href="#">Swami Rama Himalayan University, Dehradun</a></td>
                                        <td>State Private University</td>
                                        <td>Uttarakhand</td>
                                    </tr>

                                    <tr class="post-item" id="96">
                                        <td><a href="#">Tripura University</a></td>
                                        <td>Central University</td>
                                        <td>Tripura</td>
                                    </tr>

                                    <tr class="post-item" id="95">
                                        <td><a href="#">Nizams Institute of Medical Sciences, Hyderabad</a></td>
                                        <td>State Autonomous</td>
                                        <td>Telangana</td>
                                    </tr>

                                    <tr class="post-item" id="94">
                                        <td><a href="#">Kaloji Narayana Rao University of Health Sciences, Warangal</a></td>
                                        <td>State Govt University</td>
                                        <td>Telangana</td>
                                    </tr>

                                    <tr class="post-item" id="93">
                                        <td><a href="#">Bharath Institute of Higher Education &amp; Research (Deemed Univ.), Chennai</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="92">
                                        <td><a href="#">Meenakshi University (Deemed), Chennai</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="91">
                                        <td><a href="#">SRM Institute of Science &amp; Technology</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="90">
                                        <td><a href="#">Saveetha University (Deemed), Chennai</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="89">
                                        <td><a href="#">Dr. MGR Educational and Research Institute (Deemed University), Chennai</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="88">
                                        <td><a href="#">Chettinad Academy of Research and Education (Deemed University), Chettinad</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="87">
                                        <td><a href="#">Vinayaka Mission's Research Foundation (Deemed To Be University)</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="86">
                                        <td><a href="#">Sri Ramachandra Institute of Higher Education &amp; Research(Deemed to be University), Chennai</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="85">
                                        <td><a href="#">The Tamilnadu Dr. MGR Medical University,Chennai</a></td>
                                        <td>State Govt University</td>
                                        <td>Tamil Nadu</td>
                                    </tr>

                                    <tr class="post-item" id="84">
                                        <td><a href="#">Sikkim Manipal Univ. of Health,Medical &amp; Tech. Scs</a></td>
                                        <td>State Private University</td>
                                        <td>Sikkim</td>
                                    </tr>

                                    <tr class="post-item" id="83">
                                        <td><a href="#">NIMS University (Deemed), Jaipur</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="82">
                                        <td><a href="#">Geetanjali University , Udaipur</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="81">
                                        <td><a href="#">Jaipur National University (Private Univ.)</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="80">
                                        <td><a href="#">Pacific Medical University, Udaipur</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="79">
                                        <td><a href="#">Sai Tirupati University, Udaipur</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="78">
                                        <td><a href="#">Mahatma Gandhi University of Medical Science &amp; Technology, Jaipur</a></td>
                                        <td>State Private University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="77">
                                        <td><a href="#">Rajasthan University of Health Sciences</a></td>
                                        <td>State Govt University</td>
                                        <td>Rajasthan</td>
                                    </tr>

                                    <tr class="post-item" id="76">
                                        <td><a href="#">Adesh University, Bathinda</a></td>
                                        <td>State Private University</td>
                                        <td>Punjab</td>
                                    </tr>

                                    <tr class="post-item" id="75">
                                        <td><a href="#">Sri Guru Ram Das University of Health Sciences, Sri Amritsar</a></td>
                                        <td>State Private University</td>
                                        <td>Punjab</td>
                                    </tr>

                                    <tr class="post-item" id="74">
                                        <td><a href="#">Baba Farid University of Health Sciences,Faridkot</a></td>
                                        <td>State Govt University</td>
                                        <td>Punjab</td>
                                    </tr>

                                    <tr class="post-item" id="73">
                                        <td><a href="#">Pondicherry University</a></td>
                                        <td>State Govt University</td>
                                        <td>Pondicherry</td>
                                    </tr>

                                    <tr class="post-item" id="72">
                                        <td><a href="#">Sri Balaji Vidyapeeth (Deemed University), Pondicherry</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Pondicherry</td>
                                    </tr>

                                    <tr class="post-item" id="71">
                                        <td><a href="#">Statutory Autonomous, Puducherry</a></td>
                                        <td>Central Autonomous</td>
                                        <td>Pondicherry</td>
                                    </tr>

                                    <tr class="post-item" id="70">
                                        <td><a href="#">Siksha O Anusandhan University,Bhubaneswar</a></td>
                                        <td>Deemed to be University</td>
                                        <td>Odisha</td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="ajax-loader text-center">
                                <img src="images/load.gif"> Loading more course...
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>