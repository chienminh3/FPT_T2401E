

#include <stdio.h>

int main()
{
	//1.kiem tra so nguyen to
    int n;
    printf("Enter a integer number: ");
    scanf("%d", &n);
    
    if (n < 2) {
    	printf("%d is not prime.", n);
    	return 0;
	}
	
	for (int i = 2; i <= n; i++) {
		int temp = n / i;
		if (temp == 0) {
			printf("%d is not prime.", n);
			return 0;
		}
	}
	printf("%d is prime.", n);
    
    //2. tim max
//    int max_number, n;
//    printf("Enter value of max_number 1: ");
//    scanf("%d", &max_number);
//    
//    for (int i = 2; i <= 5; i++) {
//        printf("\nEnter value of max_number %d: ", i);
//        scanf("%d", &n);
//        
//        if (n > max_number) {
//            max_number = n;
//        }
//    }
//    printf("\nValue of max_number is: %d", max_number);
    
//    int array_range;
//    printf("Enter of array_range: ");
//    scanf("%d", &array_range);
//    
//    int max_number;
//    printf("Enter value of integer 1: ");
//    scanf("%d", &max_number);
//    
//    int integers_array[array_range];
//    for (int i = 2; i <=array_range; i++) {
//        printf("\nEnter value of integer %d:", i);
//        scanf("%d", &integers_array[i]);
//        if (integers_array[i] >max_number) {
//            max_number = integers_array[i];
//        }
//    }
//    printf("\nValue of max_number is: %d", max_number);
	
	//tim max va min
	int integer_number, min, max;
	printf("enter integer number: ");
	scanf("%d", &integer_number);
	printf("enter of integer 1: ");
	scanf("%d", &min);
	max = min;
	for (int i = 2; i <= integer_number; i++) {
		printf("\nenter of integer %d: ", i);
		scanf("%d", &max);
		
		if (min > max) {
			max = min;
		}
		if (min > max) {
			min = max;
		}
	}
	printf("\nValue of max is: %d", max);
	printf("\nValue of min is: %d", min);
	
    return 0;
}

