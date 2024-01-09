 @include('layout.header');



 <div class="purchases-hero bg-cover d-flex align-items-center justify-content-center ">
     <div class="overlay"></div>
     <div class="row ">
         <div class="col-12 align-items-center justify-content-center ">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb ">
                     <li class="breadcrumb-item "><a href="">Procuirements</a></li>

                     <li class="breadcrumb-item active" aria-current="page">
                         Foreign Purchases
                     </li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>

 <!-- Foreign purchases Start-->

 <div class="container-fluid sticky" id="foreign-purchases">
     <div class="row">
         <!-- Left Side Navigation -->
         <nav class="col-md-3 col-lg-3 position-relative d-md-block sidebar">
             <div class="sidebar-sticky">
                 <ul class="nav flex-column">
                     <li class="nav-item">
                         <a class="nav-link active" onclick="showContent('electrical')">ELECTRICAL EQUIPMENTS
                             <span><i class="bi bi-chevron-double-right"></i></span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" onclick="showContent('mechanical')">MECHANICAL EQUIPMENTS
                             <span><i class="bi bi-chevron-double-right"></i></span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" onclick="showContent('other-equipement')">OTHER MATERIALS & EQUIPMENTS
                             <span><i class="bi bi-chevron-double-right"></i></span></a>
                     </li>
                 </ul>
             </div>
         </nav>

         <!-- Right Side Content -->
         <main role="main" class="col-md-9 col-lg-9 px-md-4">
             <div id="electrical">

                 <div class="style5">
                     <h6>Electrical Equipments</h6>
                 </div>
                 <table id="example" class="table table-striped" style="width: 100%">
                     <thead>
                         <tr class="text-light">
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>

                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </tfoot>
                 </table>
             </div>
             <div id="mechanical" class="d-none">


                 <div class="style5">
                     <h6>Mechanical Equipments</h6>
                 </div>
                 <table id="example" class="table table-striped" style="width: 100%">
                     <thead>
                         <tr>
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </tfoot>
                 </table>
             </div>
             <div id="other-equipement" class="d-none">


                 <div class="style5">
                     <h6>Other Materials and Equipments</h6>
                 </div>
                 <table id="example" class="table table-striped" style="width: 100%">
                     <thead>
                         <tr>
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>789012</td>
                             <td>Another Description</td>
                             <td>150,000</td>
                             <td>2024-02-15 12:30:00</td>
                             <td><a href="" class="btn table-action">Action</a></td>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <th>Tender No.</th>
                             <th>Description</th>
                             <th>BID Security Amount (Rs.)</th>
                             <th>Closing Date and Time</th>
                             <th>Attachment</th>
                         </tr>
                     </tfoot>
                 </table>
             </div>
         </main>
     </div>
 </div>

 <!-- Foreign purchases end-->