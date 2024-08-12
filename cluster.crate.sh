#!/bin/bash

curl -LO https://storage.googleapis.com/minikube/releases/latest/minikube_latest_amd64.deb
sudo dpkg -i minikube_latest_amd64.deb
sudo mv -v minikube /usr/local/bin
minikube version
minikube start -p demo-cluster --node 3
