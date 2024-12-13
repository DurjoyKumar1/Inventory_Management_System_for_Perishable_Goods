<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Farm Logo">
            <h1>Admin Dashboard</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#overview">Overview</a></li>
                <!-- <li><a href="#user-management">Users</a></li> -->
                <li><a href="#inventory-management">Inventory</a></li>
                <li><a href="#reports">Reports</a></li>
                <li><a href="#settings">Settings</a></li>
                <li><a href="mainPage.html" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Overview Section -->
        <!-- <section id="overview">
            <h2>Overview</h2>
            <div class="stats">
                <div class="stat-item">
                    <h3>50</h3>
                    <p>Total Users</p>
                </div>
                <div class="stat-item">
                    <h3>120</h3>
                    <p>Inventory Items</p>
                </div>
                <div class="stat-item">
                    <h3>20</h3>
                    <p>Pending Orders</p>
                </div>
            </div> -->
        </section>

        <!-- User Management Section -->
        <!-- <section id="user-management">
            <h2>User Management</h2>
            <p>Manage all roles and users.</p>
            <button onclick="location.href='agroOfficer_dashboard.html'">Agro Officers</button>
            <button onclick="location.href='distributor.html'">Distributors</button>
            <button onclick="location.href='nuetrionist_dashboad.html'">Nuetrionist</button>
            <button onclick="location.href='warehouse_manager_Dashboard.html'">Storage Manager</button>
            
        </section> -->

        <!-- Inventory Management Section -->
        <section id="inventory-management">
            <h2>Inventory Management</h2>
            <p>Manage and track all inventory items.</p>
            <button onclick="location.href='farmer.php'">Farm</button>
            <button onclick="location.href='manage_inventory_report.html'">Inventory Reports</button>
            <button onclick="location.href='storage.html'">Storage Details</button>
            <button onclick="location.href='transportation.html'">Transportation</button>
            <button onclick="location.href='harvest_dashboard.html'">Harvest</button>
            <button onclick="location.href='store_dashboard.html'">Store</button>
            <button onclick="location.href='product.html'">product</button>
            <button onclick="location.href='shipment_dashboard.html'">Shipment</button>
        </section>

        <!-- Reports Section -->
        <section id="reports">
            <h2>Reports</h2>
            <p>Access reports across the system.</p>
            <button onclick="location.href='crop_reports.html'">Crop Reports</button>
            <button onclick="location.href='storage_reports.html'">Storage Reports</button>
            <button onclick="location.href='purchases_order_dashboard.html'">Purchases Order Reports</button>
        </section>

        <!-- Settings Section -->
        <!-- <section id="settings">
            <h2>Settings</h2>
            <button onclick="location.href='admin_settings.html'">Settings</button>
            <p>Configure system preferences.</p>
        </section> -->
    </main>
    <footer>
        <p>&copy; 2024 Farm Inventory Management. All rights reserved.</p>
    </footer>
</body>
</html>
