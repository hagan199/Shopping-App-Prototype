<a name="readme-top"></a>

<div align="center">
  <h2><b>Shopping App Prototype</b></h2>
  <br>
   <h1><b>Readme</b></h1>

</div>

<!-- TABLE OF CONTENTS -->

<details>
  <summary>
    <h1>📗 Table of Contents</h1>
  </summary>
- Features
- Installation
        - Usage
        - API Integration
- Database
- State Management
- Screenshots
- Task Submission
</details>

# Shopping App Prototype<a name="about-project"></a>

This is a prototype of a mobile shopping app built as a Single Page Application (SPA) using Laravel and Vue.js. The app includes two main pages: a product list page and a product details page. It also incorporates various features and functionalities as outlined in the task.

## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

<details>
    <summary>Client</summary>
    <ul>
        <li><a href="https://laravel.com/">Laravel</a></li>
        <li><a href="https://laravel.com/">JavaScript</a></li>
        <li>HTML</li>
        <li><a href="https://vuejs.org/">Vue.js</a></li>
        <li>CSS</li>
    </ul>
</details>

<!-- Features -->

### Key Features <a name="key-features"></a>

- **[Products List Page:]**
    - Displays a gallery of 10 products in a Masonry Layout with 2 columns.
    - Retrieves product data from the /api/products endpoint.
    - Images for the products can be retrieved from various sources.
- **[Product Details Page:]**
    - Product Details Page:
    - Accessible by clicking on any product image.
    - Displays product details including a banner image, name, description, price.
    - Provides options to add the product to the cart or save it for later.
- **[Search box to look for a particular crypto item]**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

##  Installation<a name="Installation"></a>

### Clone the repository from GitHub:

     - git clone [https://github.com/hagan199/Shopping-App-Prototype.git]
     


### Configure your .env file with your database credentials and other settings.

###  Install the necessary dependencies:
    - cd shopping-app
    - composer install
    - npm install

### Run migrations to create the products table:
    - php artisan migrate

### Seed the database with product information:
    - php artisan db:seed

### Usage
   - To run the application locally, use the following commands:
      - npm run dev
      - php artisan serve
    - Access the app in your web browser at http://localhost:8000.

### API Integration
   - For retrieving product data, we have integrated the API Ninjas service. The API key for this service is provided in the task description.

### Database
   - The application uses MySQL for database storage.
   - A migration and seeder have been provided to create and populate the products table with sample data.

### State Management
   - To efficiently manage application state, the Pinia Store for state management has been implemented. This store stores and provides access to product data in the SPA.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- AUTHORS -->

👤 **Emmanuel Hagan**

- GitHub: [@hagan199](https://github.com/hagan199)
- LinkedIn: [@emmanuel-hagan-26219a95](https://www.linkedin.com/in/emmanuel-hagan-26219a95/)
- Twitter: [@EmmaHagan23](https://twitter.com/EmmaHagan23)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTRIBUTING -->

## 🤝 Contributing <a name="contributing"></a>

Contributions, issues, and feature requests are welcome!

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- SUPPORT -->

## ⭐️ Show your support <a name="support"></a>

If you like this project feel free to let me know via Linkedin or Github, also don't forget to leave your ⭐️. I will always appreciate your comments.

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- LICENSE -->

## 📝 License <a name="license"></a>

This project is [MIT](./LICENSE) licensed.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
