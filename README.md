# CarHaven Car **"Rental"** Web Application 

## Overview
This CarHaven Web Application is built using Laravel and allows users to browse available cars, select a car, and book it for a specified rental period. The system ensures that cars are available for the chosen dates before confirming the booking. It includes role-based access control, where administrators can manage cars and rentals, while customers can view their bookings.

## Features

### Admin Dashboard
- **Manage Cars:**
  - Add, edit, and delete car details.
  - Properties: Name, Brand, Model, Year, Car Type, Daily Rent Price, Availability, and Image.

- **Manage Rentals:**
  - View and manage all rentals.
  - Track Rental ID, Customer Name, Car Details, Rental Start and End Date, Total Cost, and Status (Ongoing, Completed, Canceled).

- **Manage Customers:**
  - View and manage customer details including Name, Email, Phone Number, Address, and Rental History.

- **Dashboard Overview:**
  - Display important statistics: Total Cars, Available Cars, Total Rentals, and Total Earnings.

### Frontend (User Interface)
- **Browse Cars:**  
  - View available cars with filters (car type, brand, daily rent price).

- **Make a Booking:**  
  - Select a car, choose rental start and end date, and book.
  - Ensure car availability for the chosen period.

- **Manage Bookings:**  
  - View current and past bookings.
  - Cancel a booking (if rental has not started).

- **User Authentication:**  
  - Sign up, login, and logout.
  - Middleware protects routes for authenticated users.

### Email Notifications
- When a rental is made, an email is sent to both the customer and the admin.

## Controllers

### Admin Controllers
- `CarController` - Manage Cars
- `RentalController` - Manage Rentals
- `CustomerController` - Manage Customers

### Frontend Controllers
- `PageController` - Handle Static Pages (Home, About, Contact)
- `CarController` - Display Cars & Filtering
- `RentalController` - Booking & Rental Logic

## Models & Relationships

### User Model
- `isAdmin()`: Check if user is an admin.
- `isCustomer()`: Check if user is a customer.
- `rentals()`: `hasMany(Rental::class)`

### Car Model
- `rentals()`: `hasMany(Rental::class)`

### Rental Model
- `car()`: `belongsTo(Car::class)`
- `user()`: `belongsTo(User::class)`

## Installation & Setup

1. **Clone Repository**
   ```sh
   git clone https://github.com/theictpark/CarHaven.git
   cd CarHaven
