# Simple PHP Calculator

## Introduction

This simple PHP calculator allows users to perform various mathematical operations including addition, subtraction, multiplication, division, power, percentage, square root, and logarithm. It is designed to handle one operation at a time to ensure clarity and precision in calculations.

## Features

- **Addition**: Adds two numbers.
- **Subtraction**: Subtracts the second number from the first.
- **Multiplication**: Multiplies two numbers.
- **Division**: Divides the first number by the second. Handles division by zero with an error message.
- **Power**: Raises the first number to the power of the second number.
- **Percentage**: Calculates the percentage of a value relative to a total value.
- **Square Root**: Calculates the square root of a number.
- **Logarithm**: Calculates the natural logarithm of a positive number. Displays an error for non-positive numbers.

## Usage Instructions

### Prerequisites

Ensure you have a local server environment set up (e.g., XAMPP, WAMP, MAMP) that supports PHP.

### Setup

1. Save the provided HTML and PHP code in a file named `index.php`.
2. Place the `index.php` file in the `htdocs` directory (for XAMPP) or the appropriate directory for your server environment.
3. Start your server.
4. Access the calculator by navigating to `http://localhost/index.php` in your web browser.

### Using the Calculator

1. **Open the Calculator**: Navigate to the URL where the calculator is hosted.

2. **Input Fields**:
    - **First Number**: Enter the first number for the operation.
    - **Second Number**: Enter the second number for the operation (if applicable).
    - **Operation**: Select the desired operation from the dropdown list.
    - **Percentage Calculation**: Enter the value and total value for percentage calculation.
    - **Square Root Calculation**: Enter the number for which you want to find the square root.
    - **Logarithm Calculation**: Enter the number for which you want to find the natural logarithm.

3. **Enter the operator** Enter the operator you want to work with.

4. **Calculate**: Click the "Calculate" button to perform the operation.

5. **Result**: The result of the calculation will be displayed on the page.

### Important Notes

- **Single Operation**: Ensure only one set of fields related to an operation is filled out at a time. For example, if performing addition, only fill out the "First Number" and "Second Number" fields and select the "+" operation. 
- **Error Handling**: The calculator will display appropriate error messages for invalid inputs, such as division by zero or calculating the logarithm of a non-positive number.

### Example

To calculate the sum of 5 and 3:

1. Enter `5` in the "First Number" field.
2. Enter `3` in the "Second Number" field.
3. Select the `+` operation from the dropdown list.
4. Click "Calculate".
5. The result `8` will be displayed on the page.

## Contribution

Feel free to contribute to this project by forking the repository and submitting pull requests.

## License

This project is open-source and available under the MIT License.

