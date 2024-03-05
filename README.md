# Temperature Monitoring with Raspberry Pi

## Description

This project enables temperature monitoring using a Raspberry Pi and DS18D20 sensor. It measures ambient temperature and sends email alerts when predefined temperature limits are exceeded.

## Setup

1. Ensure the DS18D20 sensor is connected to your Raspberry Pi.
2. Update the email address in `tempenviar.php`.
3. Locate the DS18D20 sensor code in `read_temp.py` (usually found in the root directory of Raspbian).

## Usage

1. Run the `read_temp.py` script to read temperature data from the sensor.
2. Run the `tempenviar.php` script to send email alerts.

## Contributing

Contributions are welcome! Please feel free to improve this project.

## License

This project is licensed under the [MIT License](LICENSE).
