//
//  main.c
//  471
//
//  Created by Logan Hornbuckle on 3/18/18.
//  Copyright © 2018 Logan Hornbuckle. All rights reserved.
//

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(void) {

    int i,j;
    int Social[3000];
    char dob[] = "01011990";
    char fName[10];
    char mInt = '\0';
    char lName[15];
    char alphabet[] = "abcdefghijklmnopqrstuvwxyz";

    FILE* fp = fopen("new_insert.sql", "w");

    srand(time(NULL));

    for(i = 0; i < 3000; i++)
        Social[i] = 100000000 + i;

    for (i = 0; i < 29; i++) {
        fName[i] = 'a';
        lName[i] = 'c';
    }

    fName[9] = '\0';
    lName[9] = '\0';

    for (i = 0; i < 3000; i++){


        dob[2] = (char)((rand() % 9) + 48);
        dob[3] = (char)((rand() % 9) + 48);
        dob[5] = (char)((rand() % 9) + 48);
        dob[6] = (char)((rand() % 9) + 48);
        dob[8] = (char)((rand() % 9) + 48);

        for (j = 0; j < (rand() % 28) + 4; j++) {
            fName[j] = alphabet[(rand() % 26)];
            lName[j] = alphabet[(rand() % 26)];
        }

        fName[j] = '\0';
        lName[j] = '\0';

        fprintf(fp, "INSERT INTO `Employee` (`ssn`, `dob`, `fName`, `mInt`, `lName`) VALUES (%d,'%s','%s','%c','%s');\n", Social[i], dob, fName, mInt, lName);
    }

    fclose(fp);
    return 0;
}
