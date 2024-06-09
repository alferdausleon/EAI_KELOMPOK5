package com.example;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class JavaJDBC {
    public static void main(String[] args) {

            try {
                Class.forName("com.mysql.cj.jdbc.Driver");
                try {
                        Connection connection = DriverManager.getConnection(
                            "jdbc:mysql://localhost:3306/jdbcdemo", "root", ""
           );
                } catch (SQLException e) {
                        // TODO Auto-generated catch block
                        e.printStackTrace();
                }
        } catch (ClassNotFoundException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
        }
            
    }
}