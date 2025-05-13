<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/home.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <title>Jobster Clone</title>
</head>
<body>
  <section class="main-container" id="Home">


    <div class="main-left">
    <div class="left-cont">
      <h1>Find the perfect <br><span>job for you</span></h1>
      <p>Search your career opportunity through 12,800 jobs</p>
      <div class="search-bar">
        <input type="text" placeholder="Job Title or Keyword" />
        <select>
          <option>All Locations</option>
        </select>
        <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg></button>
      </div>
      <div class="popular-searches">
        <span>Popular Searches:</span>
        <a href="#">designer</a>
        <a href="#">writer</a>
        <a href="#">web developer</a>
        <a href="#">financial analyst</a>
      </div>
    </div>
    </div>


    <div class="right-cont">
      <div class="blob-image">
        
        <div class="job-stats">
          <p><strong>319</strong> job offers in Business Development</p>
          <p><strong>265</strong> job offers in Marketing & Communication</p>
          <p><strong>324</strong> job offers in Project Management</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about-container">
  <div class="category-header">
    <div class="category-content">
      <div class="p">
        <h2>Search by Category</h2>
        <p>Search your career opportunity with our categories</p>
      </div>
    </div>
  </div>

  <div class="category-carousel-wrapper">
    <button class="nav-btn prev-btn">❮</button>

    <div class="category-cards">
      <div class="category-card">
        <div class="icon-container">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z"/><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/></svg>
        </div>
        <h3>Business Development</h3>
        <p>1 open positions</p>
      </div>

      <div class="category-card">
        <div class="icon-container">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z"/><path d="m7 16.5-4.74-2.85"/><path d="m7 16.5 5-3"/><path d="M7 16.5v5.17"/><path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z"/><path d="m17 16.5-5-3"/><path d="m17 16.5 4.74-2.85"/><path d="M17 16.5v5.17"/><path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z"/><path d="M12 8 7.26 5.15"/><path d="m12 8 4.74-2.85"/><path d="M12 13.5V8"/></svg>
        </div>
        <h3>Construction</h3>
        <p>1 open positions</p>
      </div>

      <div class="category-card">
        <div class="icon-container">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 9.5 8 12l2 2.5"/><path d="m14 9.5 2 2.5-2 2.5"/><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22z"/></svg>
        </div>
        <h3>Customer Service</h3>
        <p>1 open positions</p>
      </div>

      <div class="category-card">
        <div class="icon-container">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
        </div>
        <h3>Finance</h3>
        <p>1 open positions</p>
      </div>
    </div>

    <button class="nav-btn next-btn">❯</button>
  </div>

  <div class="pagination-dots">
    <span class="dot active"></span>
    <span class="dot"></span>
  </div>
</section>

<section class="featured-jobs" id="job">

  <div class="featured-header">
    <h2>Featured Job Offers</h2>
    <p>Search your career opportunity through 12,800 jobs</p>
  </div>

  <div class="job-cards">

    <div class="job-card">
    <div class="card">
      <span class="category">Finance</span>
      <h3>Financial Analyst</h3>
      <p>📍 San Diego, CA • Full Time</p>
      <p class="date">June 8, 2022 by <strong>Gramware</strong></p>
    </div>
    </div>

    <div class="job-card">
    <div class="card">
      <span class="category">Software Engineering</span>
      <h3>Fullstack Web Developer</h3>
      <p>📍 San Francisco, CA • Internship</p>
      <p class="date">June 8, 2022 by <strong>Spyresoft</strong></p>
    </div>
    </div>


    <div class="job-card">
    <div class="card">
      <span class="category">Human Resources</span>
      <h3>Human Resources Coordinator</h3>
      <p>📍 San Diego, CA • Full Time</p>
      <p class="date">June 8, 2022 by <strong>DataRes</strong></p>
    </div>
    </div>

    <div class="job-card">
    <div class="card">
      <span class="category">Business Development</span>
      <h3>Technical Writer</h3>
      <p>📍 Los Angeles, CA • Remote</p>
      <p class="date">June 7, 2022 by <strong>Craftgenics</strong></p>
      </div>
    </div>

  </div>
</section>
  </section>

  <script src="../components/assets/js/home.js">
    const container = document.querySelector('.category-cards');
const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');

nextBtn.addEventListener('click', () => {
  container.scrollBy({ left: 300, behavior: 'smooth' });
});

prevBtn.addEventListener('click', () => {
  container.scrollBy({ left: -300, behavior: 'smooth' });
});
  </script>
</body>
</html>
