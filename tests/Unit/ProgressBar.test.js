import { describe, it, expect, beforeEach } from "vitest";
import { mount } from "@vue/test-utils";
import ProgressBar from "@/components/ProgressBar.vue";

describe("ProgresBar.vue", () => {
    let wrapper = null;

    beforeEach(() => {
        wrapper = mount(ProgressBar, {
            props: {
                percent: 30,
            },
        });
    });

    it("displaye the percentage", () => {
        expect(wrapper.find("#percent").text()).toBe("30%");
    });
});
