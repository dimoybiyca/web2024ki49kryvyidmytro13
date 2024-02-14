pipeline {
    agent any

    stages{
        stage('Cleanup') {
            steps {
                deleteDir()
            }
        }
        stage('Pull') {
            steps{
                git branch: 'dev',
                    url: 'https://github.com/dimoybiyca/web2024ki49kryvyidmytro13.git'
            }
        }
        stage('Build') {
            steps{
                sh "docker build -t 192.168.0.51:5000/web-php:0.${env.BUILD_NUMBER} ."
                sh "docker tag 192.168.0.51:5000/web-php:0.${env.BUILD_NUMBER} 192.168.0.51:5000/web-php:latest"
            }
        }
        stage('Publish') {
            steps{
                sh "docker push 192.168.0.51:5000/web-php:0.${env.BUILD_NUMBER}"
                sh "docker push 192.168.0.51:5000/web-php:latest"
            }
        }
    }
}
