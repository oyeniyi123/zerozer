<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZTA Maturity Assessment Questionnaire</title>
    <link rel="stylesheet" href="css/home.css">

    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

     <!-- Scroll top -->
     <a href="#hom" class="backto-top">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!-- header -->
  <header>
    <div class="container">
     
     <div class="header">
     <div class="headerlogo"> <a href="#">ZTM</a></div>

    <nav>
      <ul class="navbar">
        <li class="current"><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
         <li><a href="dashboard.html">Dashboard</a></li>
         <li><a href="assessment.html">Questionnaire</a></li>
     </ul>
    </nav>

    <!-- menu icon -->
    <div class="menu-icon">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
       </div>

 </div>
    </div>
 </header>

    <section id="hom" class="Dashboard-head">
        <div class="container">
            <div class="text-effect">
                <div>
                    <span data-content="Z">Z</span><span data-content="e">e</span><span data-content="r">r</span><span data-content="o">o</span>
                <span data-content="T">T</span><span data-content="r">r</span><span data-content="u">u</span><span data-content="s">s</span><span data-content="t">t</span>
                <span data-content="M">M</span><span data-content="a">a</span><span data-content="t">t</span><span data-content="u">u</span><span data-content="r">r</span><span data-content="i">i</span><span data-content="t">t</span><span data-content="y">y</span>
                <span data-content="(ZTM)">(ZTM)</span>
                </div>
               <div>
                <span data-content="H">H</span><span data-content="o">o</span><span data-content="m">m</span><span data-content="e">e</span>
               </div>
            </div>
        </div>
    </section>

    <!-- <header>
        <div class="container">
            <nav>
                <ul class="header">
                 <li class="logo"><a href="#">ZTM</a></li>
                 <li><a class="survay" href="#">Take a survay</a></li>
                </ul>
            </nav>
        </div>
    </header> -->

    <section class="hero">
      <div class="container">

        

                            <div class="form-container">
                                <h3 class="title">Register</h3>
                                <form class="form-horizontal" id="userForm">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="address"  name="address" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" id="pnumber" name="pnumber" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Industry</label>
                                        <input type="text" class="form-control" id="industry" name="industry" placeholder="Industry">
                                    </div>
                                
                                    <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                    </div>
                                       <!-- <div class="form-group">
                                        <label>Project ID</label>
                                        <input type="text" class="form-control" placeholder="Project ID">
                                    </div> -->
                                    
                                    <input class="button" type="submit" value="Summit">
                                </form>
                            </div>
                   

            <!-- <img src="img/hero.jpg" alt="pyramid"> -->

       

      </div>
    </section>



     <!-- table -->
     <section class="dashboard-table">
        <div class="container">
            <div class="table-container">
                <table>
                    <tr>
                        <th>DS</th>
                        <th>Tools</th>
                        <th>Vendor</th>
                        <th style="background-color: blanchedalmond;">SLP</th>
                        <th style="background-color: blanchedalmond;">Data</th>
                        <th style="background-color: blanchedalmond;">Procedures</th>
                        <th style="background-color: blanchedalmond;">Users MFA</th>
                        <th style="background-color: blanchedalmond;">Admin MFA</th>
                        <th>Public</th>
                        <th>Cloud</th>
                    </tr>
                    <?php
require_once "db_connect.php";

$stmt = $pdo->prepare("SELECT * FROM survey_results  ORDER BY submission_date DESC LIMIT 1");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    echo "<p>No survey results found.</p>";
    exit;
}
?>


                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td> 
                        <!-- <td style="background-color: blanchedalmond;"><span class="calender"> <?php echo $result["identity_score"]; ?><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td> -->
                        <td style="background-color: blanchedalmond;">
    <span class="calender">
        <?php echo $result["identity_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 50) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>
<td style="background-color: blanchedalmond;">

<span class="calender">
        <?php echo $result["device_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 50) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>
<td style="background-color: blanchedalmond;">
<span class="calender">
        <?php echo $result["infra_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 50) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>
<span class="calender">
        <?php echo $result["data_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 15) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>
<td style="background-color: blanchedalmond;">
<span class="calender">
        <?php echo $result["app_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 50) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>
<td style="background-color: blanchedalmond;">
<span class="calender">
        <?php echo $result["network_score"]; ?>
        <?php 
            if ($result["identity_score"] <= 15) {
                echo "<i class='bx bxs-check-circle' style='color: blue;'></i>"; // High Score
            } elseif ($result["identity_score"] >= 50) {
                echo "<i class='bx bx-block' style='color: orange;'></i>"; // Medium Score
            } else {
                echo "<i class='bx bx-x-circle' style='color: red;'></i>"; // Low Score
            }
        ?>
    </span>
</td>

                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                       <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <!-- <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr>
                    <tr>
                        <td><span class="pen"><i class='bx bx-edit-alt'></i></span></td>
                        <td>Cybersecurity Training</td>
                        <td>Sophos</td>
                        <td style="background-color: blanchedalmond;"><span class="calender"><i class='bx bxs-calendar'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="red"><i class='bx bx-x-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="white"><i class='bx bx-block'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="green"><i class='bx bxs-check-circle'></i></span></td>
                        <td style="background-color: blanchedalmond;"><span class="qestion"><i class='bx bxs-check-circle'></i></span></td>
                        <td><span class="fade-cloud"><i class='bx bx-cloud'></i></span></td>
                        <td><span class="hand"><i class='bx bxs-hand'></i></span></td>
                    </tr> -->
                </table>
            </div>
        </div>
    </section>



<!-- maturity -->
    <section class="maturity">
        <div class="container">

            <h2>ZTA Maturity Pyramid (Revised Levels)
                Level Score Description</h2>
            <div class="discribtion-main">

                <div class="sub-discribtion">
                    <i class='bx bxs-layer'></i>
                    <p>Advanced 3 Proactive security with dynamic access controls, 
                        ZTNA replacing VPN, real-time threat detection, 
                        policy-based micro-segmentation.</p>
                </div>

                <div class="sub-discribtion">
                    <i class='bx bxs-user-account'></i>
                    <p>Initial 2 Some Zero Trust principles applied, role-based access control
                         (RBAC), MFA, basic network segmentation, security monitoring in place.</p>
                </div>

                <div class="sub-discribtion">
                    <i class='bx bxs-log-in'></i>
                    <p>Traditional 1 Perimeter-based security, implicit trust, VPN-dependent, 
                        minimal logging, basic authentication methods (passwords).</p>
                </div>

                <div class="sub-discribtion">
                    <i class='bx bx-network-chart'></i>
                    <p>Bare Minimum 0 No Zero Trust implementation, flat network, weak authentication,
                         no segmentation, lack of access control.
                        ZTA Maturity Pyramid with Key Components at Each Level</p>
                </div>

                <div class="sub-discribtion">
                    <i class='bx bxs-layer'></i>
                    <p>Optimal 4 Full automation, AI-driven security, continuous risk-based policies,
                         least privilege enforced at all layers.</p>
                </div>

                <div class="sub-discribtion">
                    <i class='bx bxs-objects-vertical-bottom'></i>
                    <p>Bare Minimum (Score: 0) → No ZTA Implementation.</p>
                </div>

            </div>


            <div class="additional-main">
                <div class="additiona-fex">

                    <div class="sub-additional">
                        <span>
                          Bare Minimum (Score: 0) → No ZTA Implementation
                          Flat network, no segmentation
                          Basic username/password authentication
                          No Multi-Factor Authentication (MFA)
                          No security monitoring or logging
                          Implicit trust across users, devices, and applications
                          Minimal endpoint security controls
                          Traditional (Score: 1) → Legacy Security, Implicit Trust
                          Basic perimeter security (firewall-based)
                          VPN for remote access (no Zero Trust Network Access - ZTNA)
                        </span>
                    </div>

                    <div class="sub-additional">
                        <span>
                            Manual user provisioning & deprovisioning
                            Basic role-based access control (RBAC)
                            Role-Based Access Control (RBAC) in use
                            Some network segmentation (VLANs, least-privilege enforcement)
                            Implementing Cloud Security Posture Management (CSPM)
                            Basic SIEM logging and monitoring
                            Initial adoption of Privileged Access Management (PAM)
                            Advanced (Score: 3) → Expanding Zero Trust Protections
                            Zero Trust Network Access (ZTNA) replacing traditional VPN
                            Dynamic risk-based authentication
                        </span>
                    </div>

                    <div class="sub-additional">
                        <span>
                           Micro-segmentation implemented
                           Continuous security monitoring (SIEM, XDR)
                           AI-driven threat detection & automated responses
                           Advanced privileged access management (PAM)
                           Automated policy enforcement for user/device access
                           Optimal (Score: 4) → Fully Automated Zero Trust Architecture
                           Identity & Context-Aware Security Policies across users, devices, workloads
                        </span>
                    </div>

                    <div class="sub-additional">
                        <span>
                            Static security policies (not dynamic or risk-based)
                            Initial (Score: 2) → Beginning Zero Trust Adoption
                            Implementing Multi-Factor Authentication (MFA)
                            AI-driven threat intelligence and automated response
                            Just-In-Time (JIT) access with zero standing privileges
                            Full data encryption (at rest, in transit, in use)
                            Automated Zero Trust policy enforcement across all layers
                            End-to-End Network & Workload Security
                            Real-time security posture analytics
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </section>



    <!-- <section class="architecture">
        <div class="container">

             <div class="architecture-head">
                <h2>Zero Trust Architecture (ZTA) Maturity Tools & Services</h2>
                <p>This section maps best-in-class Zero Trust technologies to each ZTA Maturity Pillar, 
                    Domain, and Subfunctional Area with corresponding vendor technologies.</p>
             </div>

             
                <div class="sub-zta">
                    <h2><span><i class='bx bxs-shield-alt-2'></i></span> <span>Identity Pillar: Technologies & Services</span></h2>
               <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Identity Governance</td>
                    <td>Policy Enforcement</td>
                    <td>Okta Identity Governance, Microsoft Entra ID, CyberArk</td>
                </tr>
                <tr>
                    <td>Role Management</td>
                    <td>SailPoint IdentityNow, IBM Security Verify, ForgeRock</td>
                </tr>
                <tr>
                    <td>Identity Lifecycle Management</td>
                    <td>Okta Workflows, Microsoft Entra ID, Ping Identity</td>
                </tr>
                <tr>
                    <td rowspan="3">Authentication & Authorization</td>
                    <td>Authentication Methods</td>
                    <td>Okta, Duo Security, FIDO2 (YubiKey), Microsoft Entra ID, PingID</td>
                </tr>
                <tr>
                    <td>Authorization Control</td>
                    <td>CyberArk, BeyondTrust, Okta Policy Engine</td>
                </tr>
                <tr>
                    <td>Credential Management</td>
                    <td>HashiCorp Vault, CyberArk PAM, 1Password for Enterprise</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bxs-notepad'></i></span> <span>Endpoint Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Device Inventory</td>
                    <td>Device Inventory & Asset Management</td>
                    <td>Microsoft Intune, Tanium, ServiceNow ITAM</td>
                </tr>
                <tr>
                    <td>Device Authentication</td>
                    <td>Device Authentication</td>
                    <td>Okta Device Trust, Duo Device Health, Microsoft Entra ID</td>
                </tr>
                <tr>
                    <td>Configuration Management</td>
                    <td>Device Configuration Management</td>
                    <td>Microsoft Endpoint Manager, VMware Workspace ONE</td>
                </tr>
                <tr>
                    <td>Endpoint Security</td>
                    <td>Endpoint Security</td>
                    <td>CrowdStrike Falcon, Microsoft Defender for Endpoint, SentinelOne</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bxs-shield-alt-2'></i></span> <span>Application Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Secure Coding Practices</td>
                    <td>Secure Coding Practices</td>
                    <td>Checkmarx, SonarQube, Veracode, GitHub Advanced Security</td>
                </tr>
                <tr>
                    <td rowspan="2">IAM</td>
                    <td>Application Authentication</td>
                    <td>Okta, Auth0, Microsoft Entra ID, Ping Identity</td>
                </tr>
                <tr>
                    <td>Role-Based Access Control (RBAC)</td>
                    <td>CyberArk, BeyondTrust, AWS IAM, ForgeRock</td>
                </tr>
                <tr>
                    <td>API Security</td>
                    <td>API Gateway Security</td>
                    <td>AWS API Gateway, Kong Gateway, Apigee</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bx-signal-5'></i></span> <span>Network Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Network Segmentation</td>
                    <td>Zone-Based Segmentation</td>
                    <td>Illumio, Cisco Tetration, VMware NSX</td>
                </tr>
                <tr>
                    <td>Dynamic Segmentation</td>
                    <td>Cisco SD-Access, Fortinet SD-WAN, Palo Alto Networks</td>
                </tr>
                <tr>
                    <td>Network Segmentation</td>
                    <td>Juniper Mist AI, Arista CloudVision, Check Point Maestro</td>
                </tr>
                <tr>
                    <td>Threat Protection</td>
                    <td>IPS (Intrusion Prevention System)</td>
                    <td>Palo Alto Threat Prevention, Cisco Firepower, Snort</td>
                </tr>
            </tbody>
        </table>

                </div>

                <div class="sub-zta">
                    <h2><span><span><i class='bx bxs-notepad'></i></span></span> <span>Data Pillar: Technologies & Services</span></h2>
                    <table class="zta-table">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Subfunctional Area</th>
                                <th>Best-in-Class Technologies & Vendors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3">Data Inventory Management</td>
                                <td>Data Discovery</td>
                                <td>BigID, Varonis, AWS Macie</td>
                            </tr>
                            <tr>
                                <td>Automated Data Discovery</td>
                                <td>Informatica, Symantec DLP, Google DLP</td>
                            </tr>
                            <tr>
                                <td>Real-Time Data Inventory</td>
                                <td>Exabeam, Splunk, Microsoft Purview</td>
                            </tr>
                            <tr>
                                <td>Data Encryption</td>
                                <td>Encryption at Rest</td>
                                <td>AWS KMS, HashiCorp Vault, Microsoft Azure Key Vault</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            

        </div>
    </section> -->



    <main></main>


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>Zero Trust 2025 © copyright</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script> -->
    <script src="assets/js/script.js"></script>

    <script src="js/home.js"></script>
    <script>
        let scrollTop = document.querySelector(".backto-top");

window.addEventListener("scroll", () => {
    scrollTop.classList.toggle("scroll-active", window.scrollY >= 400);
}) 
    </script>
</body>
</html>
<script>
        $(document).ready(function() {
            $("#userForm").on("submit", function(e) {
                e.preventDefault();

                var name = $("#name").val().trim();
                var address = $("#address").val().trim();
                var pnumber = $("#pnumber").val().trim();
                var email = $("#email").val().trim();
                var industry = $("#industry").val().trim();

                var formData = {
                    name: name,
                    address: address,
                    phone: pnumber,
                    email: email,
                    industry: industry
                };
                console.log("Sending data:", formData); // Debugging log
                $.ajax({
                    url: "process.php",
                    method: "POST",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        console.log("Response from server:", response); // Debugging log
                        if (response.status === "success") {
                            alert("User register successfully");
                            window.location.href = response.redirect; // Redirect to survey
                        } else {

                            $("#responseMessage").text(response.message).css("color", "red");

                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                console.error("Response Text:", xhr.responseText);
                        $("#responseMessage").text("An error occurred: " + error).css("color", "red");
                    }
                });
            });
        });
    </script>