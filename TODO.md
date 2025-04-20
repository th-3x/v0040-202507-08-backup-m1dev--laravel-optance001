# Job Listing Website TODO

## Database & Models
### Job Model Enhancement
- [ ] Update migration for additional fields:
  ```php
  $table->enum('location_type', ['onsite', 'remote', 'hybrid']);
  $table->string('city')->nullable();
  $table->string('country')->nullable();
  $table->enum('job_type', ['full-time', 'part-time', 'contract']);
  $table->enum('experience_level', ['entry', 'mid', 'senior', 'lead']);
  $table->date('posted_date');
  $table->date('deadline');
  $table->enum('status', ['active', 'filled', 'expired']);
  ```
- [ ] Create skills table migration:
  ```php
  $table->id();
  $table->string('name')->unique();
  $table->timestamps();
  ```
- [ ] Create job_skill pivot table:
  ```php
  $table->foreignId('job_id');
  $table->foreignId('skill_id');
  ```

### Database Seeding
- [ ] Create SkillSeeder with common tech skills
- [ ] Create CompanySeeder with sample companies
- [ ] Create JobSeeder with:
  - Realistic job titles
  - Varied locations and types
  - Different experience levels
  - Random skills assignment
  - Realistic salary ranges

## Authentication & Authorization
### Basic Auth Setup
- [ ] Install Laravel Breeze/Jetstream
- [ ] Customize auth views for job portal
- [ ] Set up email verification

### User Types
- [ ] Create UserType enum:
  ```php
  enum UserType: string {
    case JOBSEEKER = 'jobseeker';
    case EMPLOYER = 'employer';
    case ADMIN = 'admin';
  }
  ```
- [ ] Add user_type to users table
- [ ] Create registration flows for each type

### Company Profile
- [ ] Create Company model and migration:
  ```php
  $table->string('name');
  $table->text('description');
  $table->string('website')->nullable();
  $table->string('logo_path')->nullable();
  $table->foreignId('user_id');
  ```
- [ ] Add company profile CRUD

## Job Listing Features
### Basic CRUD
- [ ] Create JobController with resource methods
- [ ] Build forms for:
  - Job creation
  - Job editing
  - Job deletion confirmation
- [ ] Add job status management

### Search & Filter
- [ ] Implement basic search by:
  - Keywords (title, description)
  - Location
  - Company
- [ ] Add advanced filters:
  - Salary range slider
  - Job type checkboxes
  - Experience level dropdown
  - Posted date range
  - Skills multiselect

### Job Applications
- [ ] Create JobApplication model:
  ```php
  $table->foreignId('job_id');
  $table->foreignId('user_id');
  $table->text('cover_letter')->nullable();
  $table->string('resume_path');
  $table->enum('status', ['pending', 'reviewed', 'shortlisted', 'rejected']);
  ```
- [ ] Build application form
- [ ] Add application status management

## UI/UX Improvements
### Job Listings
- [ ] Create responsive job card component
- [ ] Implement infinite scroll/pagination
- [ ] Add loading skeletons
- [ ] Build sorting controls

### Dashboards
#### Job Seeker Dashboard
- [ ] Applied jobs list
- [ ] Saved jobs section
- [ ] Application status tracker
- [ ] Profile completion meter

#### Employer Dashboard
- [ ] Active listings management
- [ ] Applications inbox
- [ ] Candidate tracking board
- [ ] Analytics widgets

## Additional Features
### Notifications
- [ ] Create notification types:
  ```php
  NewApplicationNotification
  ApplicationStatusNotification
  JobExpiryNotification
  ```
- [ ] Set up email templates
- [ ] Add in-app notifications

### File Management
- [ ] Configure S3/local storage
- [ ] Add resume upload with validation
- [ ] Set up company logo upload
- [ ] Implement file type/size restrictions

## Testing
### Unit Tests
- [ ] Job model tests
- [ ] Company model tests
- [ ] Application model tests
- [ ] Service class tests

### Feature Tests
- [ ] Job posting flow
- [ ] Application process
- [ ] Search functionality
- [ ] Authorization rules

## Security & Performance
### Security
- [ ] Add request validation rules
- [ ] Implement rate limiting
- [ ] Set up file upload scanning
- [ ] Add CSRF protection

### Performance
- [ ] Add query caching
- [ ] Optimize N+1 queries
- [ ] Implement job listing cache
- [ ] Add database indexes

## Documentation
- [ ] Create README with:
  - Project setup steps
  - Environment requirements
  - Configuration guide
- [ ] Add API documentation using OpenAPI/Swagger
- [ ] Write deployment guide
