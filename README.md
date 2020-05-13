# radioSG

Readme v 0.1 : To define the Customised file used for this project.


status.xsl - created by ICECAST during runtime, can used to get current playingtrack information. Data can be extracted using cURL. 

Example of cURL to capture status.xsl

curl http://sharvasg.servemp3.com:8000/status-json.xsl
{"icestats":{"admin":"ritam.mukherjee@live.com","host":"localhost","location":"mumbai","server_id":"Icecast 2.4.3","server_start":"Wed, 06 May 2020 17:49:37 +0000","server_start_iso8601":"2020-05-06T17:49:37+0000","source":{"audio_info":"bitrate=128;channels=2;samplerate=44100","bitrate":128,"channels":2,"genre":"Sharva SG Audio Stream","listener_peak":4,"listeners":1,"listenurl":"http://localhost:8000/SharvaSG","samplerate":44100,"server_description":"Sharva SG Audio Stream","server_name":"SharvaSG","server_type":"audio/mpeg","server_url":"local","stream_start":"Wed, 06 May 2020 17:58:19 +0000","stream_start_iso8601":"2020-05-06T17:58:19+0000","title":"Mahesh Mahadeo Deosthale - archana10","dummy":null}}}ubuntu@ip-172-31-7-120:~$




app.js - "unmerged" Fork of https://github.com/addpipe/simple-web-audio-recorder-demo, Custom code for SharvaSG Radio Stream using ajax to communicate with PHP backend.

index.html - form to display audio upload options. 
