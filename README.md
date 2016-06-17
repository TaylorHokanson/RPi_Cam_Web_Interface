###RPi Baby Monitor (WIP)

This project is a fork of the [RPi Cam Web
Interface](https://github.com/silvanmelchior/RPi_Cam_Web_Interface). It
adds an IR LED array that allows low light operation and is controllable via web interface.

###BOM

Part | Cost
| :--- | ---: |
| [Raspberry Pi board](http://www.newark.com/raspberry-pi/rpi2-modb-8gb-noobs/sbc-raspberry-pi-2-model-b-8gb/dp/38Y6469?selectedCategoryId=&exaMfpn=true&categoryId=&searchRef=SearchLookAhead&iscrfnonsku=false) (tested on B2 v1.1) | $40 |
| [Noir camera board](http://www.newark.com/raspberry-pi/rpi-noir-camera-board/raspberry-pi-noir-camera-board/dp/08X2023) | $25 |
| [USB wifi dongle](http://www.newark.com/adafruit-industries/814/miniature-wifi-module-raspberry/dp/53W6285?ost=53W6285&selectedCategoryId=&categoryNameResp=All%2BCategories&iscrfnonsku=false) | $12 |
| [12v power supply](https://www.amazon.com/gp/product/B00DKSI0S8/ref=oh_aui_detailpage_o02_s00?ie=UTF8&psc=1) | $12 |
| [IR LED array](https://www.amazon.com/gp/product/B0056XFS5S/ref=oh_aui_detailpage_o05_s00?ie=UTF8&psc=1) | $4 |
| [12v -> 5v buck](https://www.amazon.com/gp/product/B008BHAOQO/ref=oh_aui_detailpage_o02_s00?ie=UTF8&psc=1) | $6 |
| [N-Channel MOSFET](https://www.sparkfun.com/products/10213) | $1 |
| 10k resistor, misc wire | $0 |
| Total | $100 |

###Installation Instructions

1. Download and install [NOOBS](https://www.raspberrypi.org/downloads/)
2. Enable [SSH](https://learn.adafruit.com/adafruits-raspberry-pi-lesson-6-using-ssh/enabling-ssh)
3. '''sudo apt-get install lsb-release
 lsb_release -a'''
 Confirm OS code name is “Jessie”
3. [Attach camera](https://www.raspberrypi.org/help/camera-module-setup/) and [test](https://www.raspberrypi.org/documentation/configuration/camera.md)
4. 

