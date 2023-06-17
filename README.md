# Rcpp Chatbot

The Rcpp Chatbot is a web application chatbot developed using PHP and designed to handle inquiries for R. C. Patel Polytechnic College. It features an intuitive admin panel for managing responses, requests, feedback, and information updates. The chatbot also includes a chat log feature that saves conversations in a log.txt file for future reference and analysis.

## Features

- User-friendly interface for interacting with the chatbot
- Intuitive admin panel for managing responses, requests, and feedback
- Real-time chat log that saves conversations for reference and analysis

## Installation

1. Ensure you have XAMPP installed on your local machine.
2. Clone or download the project files and place them in the appropriate directory of your XAMPP installation (e.g., `htdocs` folder).
3. Start the XAMPP control panel and ensure that the Apache and MySQL services are running.
4. Import the provided database file (`bot.sql`) into your MySQL database using phpMyAdmin or any other database management tool.
5. Configure the database connection settings in the php files.

## Usage

1. Launch a web browser and access the chatbot by navigating to `http://localhost/rcpp-chatbot` (or the appropriate URL based on your setup).
2. Interact with the chatbot by typing in the input field.
3. Use the admin panel (accessible at `http://localhost/rcpp-chatbot/admin`) to manage responses, requests, and feedback.
4. Conversations are automatically saved in the log.txt file located in the project's root directory.

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).



