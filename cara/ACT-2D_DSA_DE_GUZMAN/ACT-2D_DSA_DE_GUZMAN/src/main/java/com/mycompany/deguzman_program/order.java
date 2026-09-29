/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.deguzman_program;
    
import java.util.Scanner;

/**
 *
 * @author CL2-PC
 */
public class order {
        public static void main(String[] args) {
        
        
    act();
    
    }
    //recursion pre-setup
    private static void act()
    {
        Scanner input = new Scanner(System.in);
        System.out.println("[1] = Snacks");
        System.out.println("[2] = Drinks");
        System.out.println("enter your choice:");
        int choice1 = input.nextInt();
        if(choice1 == 1)
        {
            System.out.println("Snakcs");
            System.out.println("[1] = Piatos [22 pesos]");
            System.out.println("[2] = Nova [25 pesos]");
            System.out.println("enter your choice:");
            int snackschoi1 = input.nextInt();
                if(snackschoi1 == 1)
             {
                    System.out.println("You chosen Piatos ");
                    System.out.println("price is 22 pesos");
                    int piatos = 22;
                    System.out.println("Enter quantity:");
                    int quan1 = input.nextInt();
                    int subtot = quan1 * piatos;
                    System.out.println("Subtotal is : "+subtot);
                    System.out.println("Enter cash:");
                    int cash = input.nextInt();
                    int tot = cash - subtot;
                    while(cash < subtot)
                    {
                    System.out.println("Enter cash:");
                    cash = input.nextInt();
                    tot = cash - subtot;
                    }
                    System.out.println("Your change is :" + tot);
                }
            
        }
        
        
    }
}
