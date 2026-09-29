/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.deguzman_program;
import java.util.Scanner;
/**
 *
 * @author CL2-PC
 */
public class Deguzman_program {

    public static void main(String[] args) {
        Scanner input = new Scanner (System.in);
        System.out.println("Hello World!");
        System.out.println("De Guzman,Cara Angela");
        
        System.out.println("Enter number:");
        int x = input.nextInt();
        System.out.println("Enter number:");
        int y = input.nextInt();
        
        int sum,diff,pro,qout;
        
        sum = x + y;
        diff = x - y;
        pro = x * y;
        qout = x / y;
        
        System.out.println("sum is: " + sum);
        System.out.println("diff is: " + diff);
        System.out.println("pro is: " + pro);
        System.out.println("qud is: " + qout);
        
        
    }
}
