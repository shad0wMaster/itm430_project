docker run --privileged=true --rm -it --name fedora_test1 -v ~/andykukuc/share:/share fedora_test1
docker run --privileged=true --rm -it --name mysql_server1 mysql_server1
#--name can only be used once there can only be 1
#delete the name and run it as much as you want COMPUTER MIGHT DIE BETA TESTING 
#beta you can control the container by import the Dockerfile somehow which is pretty dope

#WARNING
#-v /var/run/docker.sock:/var/run/docker.sock #import to container
#-v /usr/bin/docker:/usr/bin/docker #importing the docker command

#commands docker rm $(docker ps -a -q) badass commands deletes the running bullshit
