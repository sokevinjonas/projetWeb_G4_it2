<?php 
    include "include/menu.php";
?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Bievenue</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Accuel</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Tableau de Bord</a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Etudiant</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>28</h3>
                <p>Professeur</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>23</h3>
                <p>Personnel</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Orders</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status process">Process</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
included("/include/footer.php");