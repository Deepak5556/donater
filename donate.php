<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="login";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if(isset($_POST['submit'])){
    $state=$_POST['state'];
    $city=$_POST['city'];
    $bloodgroup=$_POST['bloodgroup'];
    $_SESSION['state']=$state;
    $_SESSION['city']=$city;
    $_SESSION['bloodgroup']=$bloodgroup;
        header("Location:details.php");
    $stmt->close();
}

?>
<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <link rel="icon"
        href="data:image/png;base64,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">
    <style>
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .BG-IMG {
            background-image: url('https://www.cancer.ie/sites/default/files/styles/manual_crop_16_9_scale_crop_16_9_1024w/public/2020-01/BLOOD%20CELLS.png?h=920929c4&itok=XZfZ0Fbf');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand text-danger fw-bold" href="#"> <img
                    src="data:image/png;base64,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">
                Blood Donation
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collaps5e navbar-collapse  align-items-end justify-content-end " id="navbarSupportedContent">
                <div class="justify-content-center  align-items-center ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-end justify-content-end d-flex">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-2 col-lg-3"></div>
                    <div class="col-12 col-sm-4 col-md-8 col-lg-6">
                        <div class="card my-3 ms-md-5 align-items-center p-5 shadow ">
                            <div class="container m-1 ">
                                <form method="post">
                                    <div class="align-items-center text-center my-2">
                                        <a class="navbar-brand text-danger fw-bold my-3" href="#">
                                            <h2> Blood Donation </h2>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <label for="state" class="form-label">State:</label>
                                        <select class="form-select" id="state" name="state" onchange="populateDistricts()"
                                            required>
                                            <option value="">--Select State--</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City:</label>
                                        <select class="form-select" id="district" name="city" required>
                                            <option value="">--Select District--</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="bloodgroup" class="form-label">Blood Type:</label>
                                        <select class="form-select"  id="bloodgroup" name="bloodgroup" required>
                                        <option value="">--Blood Type--</option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="O+">O+</option>
                                        <option value="A1+">A1+</option>
                                        <option value="A2+">A2+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="A1B+">A1B+</option>
                                        <option value="A2B+">A2B+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="O-">O-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="A1-">A1-</option>
                                        <option value="A2-">A2-</option>
                                        <option value="A1B-">A1B-</option>
                                        <option value="A2B-">A2B-</option>
                                        <option value="Bombay Blood">Bombay Blood</option>
                                        </select>
                                    </div>
                                    <center>
                                        <div class="align-items-center justify-content-center ">
                                          <a href="">  <button type="submit" name="submit" class="btn btn-danger px-5">Submit</button></a>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 col-lg-3 "></div>
                </div>
            </div>
        </div>
        </div>
        <script>
            function populateDistricts() {
                var stateSelect = document.getElementById("state");
                var districtSelect = document.getElementById("district");
                var selectedState = stateSelect.options[stateSelect.selectedIndex].value;
                districtSelect.innerHTML = ""; // Clear existing options

                if (selectedState === "Andhra Pradesh") {
                    var andhraPradeshDistricts = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna",
                        "Kurnool", "Nellore", "Prakasam", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"
                    ];
                    populateOptions(andhraPradeshDistricts);
                } else if (selectedState === "Arunachal Pradesh") {
                    var arunachalPradeshDistricts = ["Tawang", "West Kameng", "East Kameng", "Papum Pare", "Kurung Kumey",
                        "Kra Daadi", "Lower Subansiri", "Upper Subansiri", "West Siang", "East Siang", "Siang",
                        "Upper Siang", "Lower Siang", "Lower Dibang Valley", "Dibang Valley", "Anjaw", "Lohit", "Namsai",
                        "Changlang", "Tirap", "Longding"
                    ];
                    populateOptions(arunachalPradeshDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Assam") {
                    var assamDistricts = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang",
                        "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Dima Hasao", "Goalpara", "Golaghat", "Hailakandi",
                        "Hojai", "Jorhat", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong", "Karimganj", "Kokrajhar",
                        "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Sivasagar", "Sonitpur",
                        "South Salmara-Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"
                    ];
                    populateOptions(assamDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Bihar") {
                    var biharDistricts = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur",
                        "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur",
                        "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura", "Madhubani", "Munger",
                        "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa", "Samastipur", "Saran",
                        "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"
                    ];
                    populateOptions(biharDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Chhattisgarh") {
                    var chhattisgarhDistricts = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur",
                        "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir-Champa", "Jashpur", "Kabirdham",
                        "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh",
                        "Raipur", "Rajnandgaon", "Sukma", "Surajpur", "Surguja"
                    ];
                    populateOptions(chhattisgarhDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Goa") {
                    var goaDistricts = ["North Goa", "South Goa"];
                    populateOptions(goaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Gujarat") {
                    var gujaratDistricts = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar",
                        "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath",
                        "Jamnagar", "Junagadh", "Kutch", "Kheda", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari",
                        "Panchmahal", "Patan", "Porbandar", "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi",
                        "Vadodara", "Valsad"
                    ];
                    populateOptions(gujaratDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Haryana") {
                    var haryanaDistricts = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar",
                        "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Nuh", "Palwal", "Panchkula",
                        "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"
                    ];
                    populateOptions(haryanaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Himachal Pradesh") {
                    var himachalPradeshDistricts = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu",
                        "Lahaul and Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"
                    ];
                    populateOptions(himachalPradeshDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Jharkhand") {
                    var jharkhandDistricts = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa",
                        "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga",
                        "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahibganj", "Seraikela Kharsawan", "Simdega",
                        "West Singhbhum"
                    ];
                    populateOptions(jharkhandDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Karnataka") {
                    var karnatakaDistricts = ["Bagalkot", "Ballari", "Belagavi", "Bengaluru Rural", "Bengaluru Urban", "Bidar",
                        "Chamarajanagar", "Chikballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere",
                        "Dharwad", "Gadag", "Hassan", "Haveri", "Kalaburagi", "Kodagu", "Kolar", "Koppal", "Mandya",
                        "Mysuru", "Raichur", "Ramanagara", "Shivamogga", "Tumakuru", "Udupi", "Uttara Kannada",
                        "Vijayapura", "Yadgir"
                    ];
                    populateOptions(karnatakaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Kerala") {
                    var keralaDistricts = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam",
                        "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"
                    ];
                    populateOptions(keralaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Madhya Pradesh") {
                    var madhyaPradeshDistricts = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani",
                        "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas",
                        "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua",
                        "Katni", "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna",
                        "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna", "Sehore", "Seoni", "Shahdol", "Shajapur",
                        "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
                    ];
                    populateOptions(madhyaPradeshDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Maharashtra") {
                    var maharashtraDistricts = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana",
                        "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur",
                        "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar",
                        "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane",
                        "Wardha", "Washim", "Yavatmal"
                    ];
                    populateOptions(maharashtraDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Manipur") {
                    var manipurDistricts = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam",
                        "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal",
                        "Thoubal", "Ukhrul"
                    ];
                    populateOptions(manipurDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Meghalaya") {
                    var meghalayaDistricts = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills",
                        "Ri Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills",
                        "West Jaintia Hills", "West Khasi Hills"
                    ];
                    populateOptions(meghalayaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Mizoram") {
                    var mizoramDistricts = ["Aizawl", "Champhai", "Hnahthial", "Khawzawl", "Kolasib", "Lawngtlai", "Lunglei",
                        "Mamit", "Saiha", "Serchhip"
                    ];
                    populateOptions(mizoramDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Nagaland") {
                    var nagalandDistricts = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek",
                        "Tuensang", "Wokha", "Zunheboto"
                    ];
                    populateOptions(nagalandDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Odisha") {
                    var odishaDistricts = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Deogarh",
                        "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi",
                        "Kandhamal", "Kendrapara", "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj",
                        "Nabarangpur", "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur", "Subarnapur", "Sundargarh"
                    ];
                    populateOptions(odishaDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Punjab") {
                    var punjabDistricts = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka",
                        "Ferozepur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga",
                        "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sahibzada Ajit Singh Nagar", "Sangrur",
                        "Shahid Bhagat Singh Nagar", "Sri Muktsar Sahib", "Tarn Taran"
                    ];
                    populateOptions(punjabDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Rajasthan") {
                    var rajasthanDistricts = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara",
                        "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Hanumangarh",
                        "Jaipur", "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur",
                        "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Sri Ganganagar", "Tonk",
                        "Udaipur"
                    ];
                    populateOptions(rajasthanDistricts);
                }
                else if (selectedState === "Sikkim") {
                    var sikkimDistricts = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
                    populateOptions(sikkimDistricts);
                }
                else if (selectedState === "Tamil Nadu") {
                    var tamilNaduDistricts = ["Ariyalur", "Chengalpattu", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri",
                        "Dindigul", "Erode", "Kallakurichi", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri",
                        "Madurai", "Mayiladuthurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai",
                        "Ramanathapuram", "Ranipet", "Salem", "Sivaganga", "Tenkasi", "Thanjavur", "Theni", "Thoothukudi",
                        "Tiruchirappalli", "Tirunelveli", "Tirupathur", "Tiruppur", "Tiruvallur", "Tiruvannamalai",
                        "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"
                    ];
                    populateOptions(tamilNaduDistricts);
                }
                else if (selectedState === "Telangana") {
                    var telanganaDistricts = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon",
                        "Jayashankar Bhupalpally", "Jogulamba Gadwal", "Kamareddy", "Karimnagar", "Khammam",
                        "Kumuram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal–Malkajgiri",
                        "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Rangareddy",
                        "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural", "Warangal Urban",
                        "Yadadri Bhuvanagiri"
                    ];
                    populateOptions(telanganaDistricts);
                }
                else if (selectedState === "Tripura") {
                    var tripuraDistricts = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura",
                        "Unakoti", "West Tripura"
                    ];
                    populateOptions(tripuraDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Uttar Pradesh") {
                    var uttarPradeshDistricts = ["Agra", "Aligarh", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Ayodhya",
                        "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti",
                        "Bhadohi", "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah",
                        "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
                        "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj",
                        "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur",
                        "Lucknow", "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad",
                        "Muzaffarnagar", "Pilibhit", "Pratapgarh", "Prayagraj", "Rae Bareli", "Rampur", "Saharanpur",
                        "Sambhal", "Sant Kabir Nagar", "Shahjahanpur", "Shamli", "Shrawasti", "Siddharthnagar", "Sitapur",
                        "Sonbhadra", "Sultanpur", "Unnao", "Varanasi"
                    ];
                    populateOptions(uttarPradeshDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "Uttarakhand") {
                    var uttarakhandDistricts = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar",
                        "Nainital", "Pauri Garhwal", "Pithoragarh", "Rudraprayag", "Tehri Garhwal", "Udham Singh Nagar",
                        "Uttarkashi"
                    ];
                    populateOptions(uttarakhandDistricts);
                }
                // Add more states and corresponding districts here
                else if (selectedState === "West Bengal") {
                    var westBengalDistricts = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur",
                        "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda",
                        "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur",
                        "Purba Bardhaman", "Purba Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"
                    ];
                    populateOptions(westBengalDistricts);
                }
            }
            function populateOptions(districts) {
                var districtSelect = document.getElementById("district");
                for (var i = 0; i < districts.length; i++) {
                    var option = document.createElement("option");
                    option.text = districts[i];
                    option.value = districts[i];
                    districtSelect.add(option);
                }
            }
        </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    </body>

    </html>