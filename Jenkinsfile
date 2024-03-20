pipeline {
    agent any

    environment {
        VAULT_PASSWORD = credentials('ansible-vault-password')
    }
    
    stages{
        stage('Cleanup') {
            steps {
                deleteDir()
            }
        }
        stage('Pull') {
            steps{
                git branch: 'task4',
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
        stage('Deploy') {
            steps {
                dir('ansible') {
                    sh 'ansible-playbook -i inventory all.yml --tags=\'deploy\' --vault-password-file=${VAULT_PASSWORD}'
                }
            }
        }
    }
}
